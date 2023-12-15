"use strict";
document.addEventListener('DOMContentLoaded', function () {
    let URI = localStorage.getItem("URI"),
        _GET = JSON.parse(localStorage.getItem("_GET")),
        _POST = JSON.parse(localStorage.getItem("_POST"));

    const ROUTES = JSON.parse(localStorage.getItem("ROUTES")),
        PROTOCOL = localStorage.getItem("PROTOCOL"),
        PATH_DIFF = localStorage.getItem("HOME_PATH"),
        TO_HOME = localStorage.getItem("TO_HOME"),
        THIS_PATH = localStorage.getItem("THIS_PATH"),
        HOME_PATH = localStorage.getItem("HOME_PATH");

    const getLocalStorageItems = function () {
        URI = localStorage.getItem("URI"),
            _GET = JSON.parse(localStorage.getItem("_GET")),
            _POST = JSON.parse(localStorage.getItem("_POST"));
    };

    const errorPage = function (status, custom_error_message = "") {
        $.ajax({
            type: "POST",
            url: `${HOME_PATH}_error.php?e=${status}`,
            data: { custom_error_message },
            success: function (data) {
                document.write(data);
            }, error: function (xhr, status, error) {
                console.log("Error loading content:", error);
            }
        });
    };

    const parseURL = function (uri = "/") {
        while (uri.length > 0 && !uri.startsWith("/")) uri = uri.substring(1);
        while (uri.length > 1 && uri.endsWith("/")) uri = uri.substring(0, uri.length - 1);
        if (!uri.includes("/$/")) return { path: uri, params: {} };
        const [path, param] = uri.split("/$/", 2);
        const keyValuePairs = param.split("/");
        const params = {};
        for (let i = 0; i < keyValuePairs.length; i += 2)
            if (keyValuePairs[i + 1] !== undefined)
                params[keyValuePairs[i]] = keyValuePairs[i + 1];
        return { path, params };
    };

    const routeURL = function (uri = "/") {
        const { path, params } = parseURL(uri);
        localStorage.setItem("URI", path);
        getLocalStorageItems();
        _GET["uri"] = URI;
        if (!ROUTES.hasOwnProperty(path) || !Object.entries(ROUTES).length || (!ROUTES[path].GET && !ROUTES[path].POST))
            errorPage(404, `Route "${uri}" does not exist.`);
        localStorage.setItem("_GET", JSON.stringify({ ..._GET, ...ROUTES[path].GET ?? [], ...params }));
        localStorage.setItem("_POST", JSON.stringify({ ..._POST, ...ROUTES[path].POST ?? [] }));
        getLocalStorageItems();
        return { path, uri: ROUTES[path].URI, file: ROUTES[path].FILE, get: _GET, post: _POST };
    };

    const loadSPA = function (url) {
        $(".load-circle-back, .load-circle-fore, .load-text, .loading").fadeIn(1);
        $("#spa-page-content-container").html("");
        const { path, uri, file, get, post } = routeURL(`${url}`);
        /* console.log(`loadSPA(); ${url}?`);
        console.log("routeURL(); PATH=", path, "; URI=", uri, "; FILE=", file, "; _GET=", get, "; _POST=", post);
        console.log(`${HOME_PATH}${uri}?${new URLSearchParams(get).toString()}`); */
        file ? window.location = path :
            $.ajax({
                type: "POST",
                url: `${HOME_PATH}${uri}?${new URLSearchParams(get).toString()}`,
                data: { ...post },
                success: function (data) {
                    $("#spa-page-content-container").html(data);
                    history.pushState({}, "", url);
                }, error: function (xhr, status, error) {
                    console.log("Error loading content:", error);
                    errorPage(404, `Route "${url}" does not exist.`);
                }, complete: function () {
                    $(".load-circle-back, .load-circle-fore, .load-text, .loading").fadeOut(500);
                }
            });
    };

    $(document).on('click', 'a', function (e) {
        e.preventDefault();
        loadSPA($(this).attr('href'));
    });

    $(document).ready(function () {
        loadSPA(`${TO_HOME == "./" ? "." : TO_HOME}${URI}`);
    });
});