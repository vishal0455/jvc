<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from templatekit.jegtheme.com/egistic/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 08:52:52 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="pingback" href="xmlrpc.html" />
    <title>Egistic &#8211; Sea Freight &amp; Logistic Company Elementor Template Kit by Jegtheme</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="alternate" type="application/rss+xml" title="Egistic &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Egistic &raquo; Comments Feed"
        href="comments/feed/index.html" />
    <script>
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/templatekit.jegtheme.com\/egistic\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.1"
        }
    };
    /*! This file is auto-generated */
    ! function(i, n) {
        var o, s, e;

        function c(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
        }

        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                    .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function(e, t) {
                return e === r[t]
            })
        }

        function u(e, t, n) {
            switch (t) {
                case "flag":
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                        n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                            "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                            "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                case "emoji":
                    return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                        "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
            }
            return !1
        }

        function f(e, t, n) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                    300, 150) : i.createElement("canvas"),
                a = r.getContext("2d", {
                    willReadFrequently: !0
                }),
                o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
            return e.forEach(function(e) {
                o[e] = t(a, e, n)
            }), o
        }

        function t(e) {
            var t = i.createElement("script");
            t.src = e, t.defer = !0, i.head.appendChild(t)
        }
        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, e = new Promise(function(e) {
            i.addEventListener("DOMContentLoaded", e, {
                once: !0
            })
        }), new Promise(function(t) {
            var n = function() {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                        e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {}
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                    typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                            .toString()
                        ].join(",") + "));",
                        r = new Blob([e], {
                            type: "text/javascript"
                        }),
                        a = new Worker(URL.createObjectURL(r), {
                            name: "wpTestEmojiSupports"
                        });
                    return void(a.onmessage = function(e) {
                        c(n = e.data), a.terminate(), t(n)
                    })
                } catch (e) {}
                c(n = f(s, u, p))
            }
            t(n)
        }).then(function(e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                    .everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                .DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
        }).then(function() {
            return e
        }).then(function() {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
    }((window, document), window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='jkit-elements-main-css'
        href='wp-content/plugins/jeg-elementor-kit/assets/css/elements/main61da.css?ver=2.6.2' media='all' />
    <style id='wp-emoji-styles-inline-css'>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='wp-includes/css/dist/block-library/style.minaec2.css?ver=6.4.1' media='all' />
    <style id='classic-theme-styles-inline-css'>
    /*! This file is auto-generated */
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }
    </style>
    <style id='global-styles-inline-css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    :where(.is-layout-grid) {
        gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    body .is-layout-grid>* {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
    </style>
    <link rel='stylesheet' id='allow-webp-image-css'
        href='wp-content/plugins/allow-webp-image/public/css/allow-webp-image-publicf269.css?ver=1.0.1' media='all' />
    <link rel='stylesheet' id='template-kit-export-css'
        href='wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min365c.css?ver=1.0.21'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min192d.css?ver=5.23.0' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='wp-content/plugins/elementor/assets/css/frontend-lite.min8864.css?ver=3.17.3' media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6' media='all' />
    <link rel='stylesheet' id='elementor-post-3-css'
        href='wp-content/uploads/sites/241/elementor/css/post-33054.css?ver=1700565167' media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='wp-content/uploads/sites/241/elementor/css/globalc697.css?ver=1700565168' media='all' />
    <link rel='stylesheet' id='elementor-post-6-css'
        href='wp-content/uploads/sites/241/elementor/css/post-6c697.css?ver=1700565168' media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min8864.css?ver=3.17.3' media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min8864.css?ver=3.17.3' media='all' />
    <link rel='stylesheet' id='text-editor-style-css'
        href='wp-content/plugins/metform/public/assets/css/text-editor9e95.css?ver=3.8.0' media='all' />
    <link rel='stylesheet' id='hello-elementor-css' href='wp-content/themes/hello-elementor/style.minc141.css?ver=2.6.1'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href='wp-content/themes/hello-elementor/theme.minc141.css?ver=2.6.1' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Public+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.1'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' media='all' />
    <link rel='stylesheet' id='elementor-icons-jkiticon-css'
        href='wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticon61da.css?ver=2.6.2' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script src="wp-content/plugins/allow-webp-image/public/js/allow-webp-image-publicf269.js?ver=1.0.1"
        id="allow-webp-image-js"></script>
    <script
        src="wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min365c.js?ver=1.0.21"
        id="template-kit-export-js"></script>
    <script src="wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min8864.js?ver=3.17.3"
        id="font-awesome-4-shim-js"></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/6.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
    <meta name="generator" content="WordPress 6.4.1" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed"
        href="wp-json/oembed/1.0/embed9067.json?url=https%3A%2F%2Ftemplatekit.jegtheme.com%2Fegistic%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embedd0ad?url=https%3A%2F%2Ftemplatekit.jegtheme.com%2Fegistic%2F&amp;format=xml" />
    <meta name="generator"
        content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
</head>

<body
    class="home page-template page-template-elementor_header_footer page page-id-6 jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-6">
    <div id="page" class="jkit-template  site">

        <header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
            <style>
            .elementor-415 .elementor-element.elementor-element-945a6cc>.elementor-container {
                max-width: 1170px;
            }

            .elementor-415 .elementor-element.elementor-element-945a6cc>.elementor-container>.elementor-column>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-415 .elementor-element.elementor-element-945a6cc {
                border-style: solid;
                border-width: 0px 0px 1px 0px;
                border-color: #FFFFFF1F;
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                margin-top: 0px;
                margin-bottom: -85px;
                z-index: 99;
            }

            .elementor-415 .elementor-element.elementor-element-945a6cc>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-415 .elementor-element.elementor-element-c616d3e>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 10px 10px 10px 10px;
            }

            .elementor-415 .elementor-element.elementor-element-c616d3e>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-415 .elementor-element.elementor-element-d041950 {
                text-align: left;
            }

            .elementor-415 .elementor-element.elementor-element-d041950 img {
                width: 87%;
            }

            .elementor-415 .elementor-element.elementor-element-6e4388f>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-415 .elementor-element.elementor-element-6e4388f>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu>ul,
            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper:not(.active) .jkit-menu,
            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper:not(.active) .jkit-menu>li>a {
                display: flex;
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu {
                justify-content: flex-end;
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .menu-item .sub-menu {
                left: unset;
                top: 100%;
                right: unset;
                bottom: unset;
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .menu-item .sub-menu .menu-item .sub-menu {
                left: 100%;
                top: unset;
                right: unset;
                bottom: unset;
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper {
                height: 84px;
                padding: 0px 0px 0px 0px;
                margin: 0px 0px 0px 0px;
                border-radius: 0px 0px 0px 0px;
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li>a {
                font-family: var(--e-global-typography-612373c-font-family), Sans-serif;
                font-size: var(--e-global-typography-612373c-font-size);
                font-weight: var(--e-global-typography-612373c-font-weight);
                line-height: var(--e-global-typography-612373c-line-height);
                letter-spacing: var(--e-global-typography-612373c-letter-spacing);
                word-spacing: var(--e-global-typography-612373c-word-spacing);
                padding: 0px 18px 0px 18px;
                color: #FFFFFF;
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li>a svg {
                fill: #FFFFFF;
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li:hover>a {
                color: var(--e-global-color-9ab75bb);
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li:hover>a svg {
                fill: var(--e-global-color-9ab75bb);
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li.current-menu-item>a,
            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li.current-menu-ancestor>a {
                color: var(--e-global-color-9ab75bb);
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li.current-menu-item>a svg,
            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li.current-menu-ancestor>a svg {
                fill: var(--e-global-color-9ab75bb);
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children>a i,
            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children>a svg {
                margin: 3px 0px 0px 10px;
                border-style: solid;
                border-width: 0px 0px 0px 0px;
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li>a {
                color: var(--e-global-color-ad8e29f);
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li>a svg {
                fill: var(--e-global-color-ad8e29f);
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li:hover>a {
                color: var(--e-global-color-1b404c2);
                background-color: var(--e-global-color-9ab75bb);
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li:hover>a svg {
                fill: var(--e-global-color-1b404c2);
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li.current-menu-item>a {
                color: var(--e-global-color-1b404c2);
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li.current-menu-item>a svg {
                fill: var(--e-global-color-1b404c2);
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu>li.current-menu-item>a {
                background-color: var(--e-global-color-9ab75bb);
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children .sub-menu {
                padding: 10px 10px 10px 10px;
                background-color: #FFFFFF;
                border-radius: 0px 0px 0px 0px;
                min-width: 200px;
                box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.5);
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu {
                float: right;
                background-color: #FFFFFF00;
                border-style: solid;
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu {
                background-color: var(--e-global-color-1b404c2);
                border-style: solid;
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-nav-site-title .jkit-nav-logo img {
                object-fit: cover;
            }

            .elementor-415 .elementor-element.elementor-element-8cfbce6>.elementor-widget-container {
                margin: 0px 10px 0px 0px;
            }

            .elementor-415 .elementor-element.elementor-element-6e777d1>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 10px 10px 10px 10px;
            }

            .elementor-415 .elementor-element.elementor-element-6e777d1>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-415 .elementor-element.elementor-element-2dfde39 .elementor-button .elementor-align-icon-right {
                margin-left: 12px;
            }

            .elementor-415 .elementor-element.elementor-element-2dfde39 .elementor-button .elementor-align-icon-left {
                margin-right: 12px;
            }

            .elementor-415 .elementor-element.elementor-element-2dfde39 .elementor-button {
                font-family: var(--e-global-typography-612373c-font-family), Sans-serif;
                font-size: var(--e-global-typography-612373c-font-size);
                font-weight: var(--e-global-typography-612373c-font-weight);
                line-height: var(--e-global-typography-612373c-line-height);
                letter-spacing: var(--e-global-typography-612373c-letter-spacing);
                word-spacing: var(--e-global-typography-612373c-word-spacing);
                fill: #FFFFFF;
                color: #FFFFFF;
                background-color: var(--e-global-color-9ab75bb);
                border-radius: 0px 0px 0px 0px;
                padding: 15px 30px 15px 30px;
            }

            .elementor-415 .elementor-element.elementor-element-2dfde39 .elementor-button:hover,
            .elementor-415 .elementor-element.elementor-element-2dfde39 .elementor-button:focus {
                color: var(--e-global-color-9ab75bb);
                background-color: #FFFFFF;
            }

            .elementor-415 .elementor-element.elementor-element-2dfde39 .elementor-button:hover svg,
            .elementor-415 .elementor-element.elementor-element-2dfde39 .elementor-button:focus svg {
                fill: var(--e-global-color-9ab75bb);
            }

            @media(min-width:768px) {
                .elementor-415 .elementor-element.elementor-element-c616d3e {
                    width: 16%;
                }

                .elementor-415 .elementor-element.elementor-element-6e4388f {
                    width: 66.332%;
                }

                .elementor-415 .elementor-element.elementor-element-6e777d1 {
                    width: 17%;
                }
            }

            @media(max-width:1024px) and (min-width:768px) {
                .elementor-415 .elementor-element.elementor-element-c616d3e {
                    width: 25%;
                }

                .elementor-415 .elementor-element.elementor-element-6e4388f {
                    width: 75%;
                }

                .elementor-415 .elementor-element.elementor-element-6e777d1 {
                    width: 22%;
                }
            }

            @media(max-width:1024px) {
                .elementor-415 .elementor-element.elementor-element-945a6cc {
                    margin-top: 0px;
                    margin-bottom: -100px;
                    padding: 10px 10px 10px 10px;
                }

                .elementor-415 .elementor-element.elementor-element-d041950 img {
                    width: 100%;
                }

                .elementor-415 .elementor-element.elementor-element-6e4388f>.elementor-element-populated {
                    padding: 10px 10px 10px 10px;
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu.break-point-mobile .jkit-menu-wrapper {
                    background-color: var(--e-global-color-ad8e29f);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu.break-point-tablet .jkit-menu-wrapper {
                    background-color: var(--e-global-color-ad8e29f);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper {
                    padding: 20px 20px 0px 20px;
                    margin: 0px 0px 0px 0px;
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li>a {
                    font-size: var(--e-global-typography-612373c-font-size);
                    line-height: var(--e-global-typography-612373c-line-height);
                    letter-spacing: var(--e-global-typography-612373c-letter-spacing);
                    word-spacing: var(--e-global-typography-612373c-word-spacing);
                    padding: 10px 20px 15px 10px;
                    color: var(--e-global-color-1b404c2);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li>a svg {
                    fill: var(--e-global-color-1b404c2);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li:hover>a {
                    color: var(--e-global-color-9ab75bb);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li:hover>a svg {
                    fill: var(--e-global-color-9ab75bb);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li.current-menu-item>a,
                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li.current-menu-ancestor>a {
                    color: var(--e-global-color-9ab75bb);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li.current-menu-item>a svg,
                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li.current-menu-ancestor>a svg {
                    fill: var(--e-global-color-9ab75bb);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children>a i,
                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children>a svg {
                    border-radius: 0px 0px 0px 0px;
                    border-width: 0px 0px 0px 0px;
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children .sub-menu {
                    padding: 10px 10px 10px 10px;
                    border-radius: 0px 0px 0px 0px;
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu {
                    width: 22px;
                    border-width: 0px 0px 0px 0px;
                    border-radius: 0px 0px 0px 0px;
                    color: var(--e-global-color-1b404c2);
                    padding: 0px 0px 0px 0px;
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu i {
                    font-size: 25px;
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu svg {
                    width: 25px;
                    fill: var(--e-global-color-1b404c2);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu {
                    border-width: 0px 0px 0px 0px;
                    border-radius: 0px 0px 0px 0px;
                    color: var(--e-global-color-9ab75bb);
                    margin: 5px 20px 0px 0px;
                    padding: 13px 20px 13px 17px;
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu svg {
                    fill: var(--e-global-color-9ab75bb);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-nav-site-title .jkit-nav-logo img {
                    max-width: 157px;
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 {
                    z-index: 5;
                }

                .elementor-415 .elementor-element.elementor-element-2dfde39 .elementor-button {
                    font-size: var(--e-global-typography-612373c-font-size);
                    line-height: var(--e-global-typography-612373c-line-height);
                    letter-spacing: var(--e-global-typography-612373c-letter-spacing);
                    word-spacing: var(--e-global-typography-612373c-word-spacing);
                }
            }

            @media(max-width:767px) {
                .elementor-415 .elementor-element.elementor-element-c616d3e {
                    width: 50%;
                }

                .elementor-415 .elementor-element.elementor-element-d041950 img {
                    width: 76%;
                }

                .elementor-415 .elementor-element.elementor-element-6e4388f {
                    width: 50%;
                }

                .elementor-415 .elementor-element.elementor-element-6e4388f>.elementor-element-populated {
                    padding: 10px 10px 10px 10px;
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li>a {
                    font-size: var(--e-global-typography-612373c-font-size);
                    line-height: var(--e-global-typography-612373c-line-height);
                    letter-spacing: var(--e-global-typography-612373c-letter-spacing);
                    word-spacing: var(--e-global-typography-612373c-word-spacing);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu {
                    color: var(--e-global-color-1b404c2);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu svg {
                    fill: var(--e-global-color-1b404c2);
                }

                .elementor-415 .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-nav-site-title .jkit-nav-logo img {
                    max-width: 160px;
                }

                .elementor-415 .elementor-element.elementor-element-2dfde39 .elementor-button {
                    font-size: var(--e-global-typography-612373c-font-size);
                    line-height: var(--e-global-typography-612373c-line-height);
                    letter-spacing: var(--e-global-typography-612373c-letter-spacing);
                    word-spacing: var(--e-global-typography-612373c-word-spacing);
                    padding: 18px 32px 18px 32px;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu {
                    display: block;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper {
                    width: 100%;
                    max-width: 360px;
                    border-radius: 0;
                    background-color: #f7f7f7;
                    width: 100%;
                    position: fixed;
                    top: 0;
                    left: -110%;
                    height: 100% !important;
                    box-shadow: 0 10px 30px 0 rgba(255, 165, 0, 0);
                    overflow-y: auto;
                    overflow-x: hidden;
                    padding-top: 0;
                    padding-left: 0;
                    padding-right: 0;
                    display: flex;
                    flex-direction: column-reverse;
                    justify-content: flex-end;
                    -moz-transition: left .6s cubic-bezier(.6, .1, .68, .53), width .6s;
                    -webkit-transition: left .6s cubic-bezier(.6, .1, .68, .53), width .6s;
                    -o-transition: left .6s cubic-bezier(.6, .1, .68, .53), width .6s;
                    -ms-transition: left .6s cubic-bezier(.6, .1, .68, .53), width .6s;
                    transition: left .6s cubic-bezier(.6, .1, .68, .53), width .6s;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper.active {
                    left: 0;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu-container {
                    overflow-y: hidden;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel {
                    padding: 10px 0px 10px 0px;
                    display: block;
                    position: relative;
                    z-index: 5;
                    width: 100%;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-nav-site-title {
                    display: inline-block;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu {
                    display: block;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu {
                    display: block;
                    height: 100%;
                    overflow-y: auto;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children>a i {
                    margin-left: auto;
                    border: 1px solid var(--jkit-border-color);
                    border-radius: 3px;
                    padding: 4px 15px;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children>a svg {
                    margin-left: auto;
                    border: 1px solid var(--jkit-border-color);
                    border-radius: 3px;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children .sub-menu {
                    position: inherit;
                    box-shadow: none;
                    background: none;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li {
                    display: block;
                    width: 100%;
                    position: inherit;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li .sub-menu {
                    display: none;
                    max-height: 2500px;
                    opacity: 0;
                    visibility: hidden;
                    transition: max-height 5s ease-out;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li .sub-menu.dropdown-open {
                    display: block;
                    opacity: 1;
                    visibility: visible;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li a {
                    display: block;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li a i {
                    float: right;
                }
            }

            @media (max-width: 1024px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li a svg {
                    float: right
                }
            }

            @media (min-width: 1025px) {
                .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu-container {
                    height: 100%;
                }
            }

            @media (max-width: 1024px) {
                .admin-bar .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper {
                    top: 32px;
                }
            }

            @media (max-width: 782px) {
                .admin-bar .elementor-element.elementor-element-8cfbce6 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper {
                    top: 46px;
                }
            }
            </style>
            <div data-elementor-type="page" data-elementor-id="415" class="elementor elementor-415">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-945a6cc elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="945a6cc" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c616d3e"
                            data-id="c616d3e" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-d041950 elementor-widget elementor-widget-image"
                                    data-id="d041950" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                        /*! elementor - v3.17.0 - 08-11-2023 */
                                        .elementor-widget-image {
                                            text-align: center
                                        }

                                        .elementor-widget-image a {
                                            display: inline-block
                                        }

                                        .elementor-widget-image a img[src$=".svg"] {
                                            width: 48px
                                        }

                                        .elementor-widget-image img {
                                            vertical-align: middle;
                                            display: inline-block
                                        }
                                        </style> <img width="3877" height="1083"
                                            src="wp-content/uploads/sites/241/2022/03/egistic-logo.png"
                                            class="attachment-full size-full wp-image-411" alt="" decoding="async"
                                            srcset="https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo.png 3877w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo-300x84.png 300w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo-1024x286.png 1024w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo-768x215.png 768w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo-1536x429.png 1536w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo-2048x572.png 2048w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo-800x223.png 800w"
                                            sizes="(max-width: 3877px) 100vw, 3877px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6e4388f"
                            data-id="6e4388f" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-8cfbce6 elementor-widget elementor-widget-jkit_nav_menu"
                                    data-id="8cfbce6" data-element_type="widget"
                                    data-widget_type="jkit_nav_menu.default">
                                    <div class="elementor-widget-container">
                                        <div class="jeg-elementor-kit jkit-nav-menu break-point-tablet submenu-click-title jeg_module_6__67a1d552db88d"
                                            data-item-indicator="&lt;i aria-hidden=&quot;true&quot; class=&quot;jki jki-chevron-down-light&quot;&gt;&lt;/i&gt;">
                                            <button class="jkit-hamburger-menu"><i aria-hidden="true"
                                                    class="jki jki-bars-solid"></i></button>
                                            <div class="jkit-menu-wrapper">
                                                <div class="jkit-menu-container">
                                                    <ul id="menu-menu-1"
                                                        class="jkit-menu jkit-menu-direction-flex jkit-submenu-position-top">
                                                        <li id="menu-item-43"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-43">
                                                            <a href="index.html" aria-current="page">Home</a></li>
                                                        <li id="menu-item-39"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39">
                                                            <a href="about-us/index.html">About Us</a></li>
                                                        <li id="menu-item-45"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45">
                                                            <a href="service/index.html">Service</a></li>
                                                        <li id="menu-item-47"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-47">
                                                            <a href="#">Page</a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-46"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46">
                                                                    <a href="team/index.html">Team</a></li>
                                                                <li id="menu-item-44"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44">
                                                                    <a href="pricing/index.html">Pricing</a></li>
                                                                <li id="menu-item-42"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42">
                                                                    <a href="faq/index.html">FAQ</a></li>
                                                                <li id="menu-item-38"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38">
                                                                    <a href="404-page/index.html">404 page</a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-48"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-48">
                                                            <a href="#">Blog</a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-40"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40">
                                                                    <a href="blog/index.html">Blog</a></li>
                                                                <li id="menu-item-1231"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1231">
                                                                    <a
                                                                        href="2022/03/09/major-freight-forwarders-suspend-russia-services/index.html">Single
                                                                        Blog</a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-41"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41">
                                                            <a href="contact-us/index.html">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="jkit-nav-identity-panel">
                                                    <div class="jkit-nav-site-title"><a
                                                            href="https://templatekit.jegtheme.com/egistic"
                                                            class="jkit-nav-logo"><img
                                                                src="wp-content/uploads/sites/241/2022/03/egistic-logo.png"></a>
                                                    </div>
                                                    <button class="jkit-close-menu"><i aria-hidden="true"
                                                            class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="jkit-overlay"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6e777d1 elementor-hidden-phone elementor-hidden-tablet"
                            data-id="6e777d1" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2dfde39 elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-button"
                                    data-id="2dfde39" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon elementor-align-icon-left">
                                                        <i aria-hidden="true" class="fas fa-phone-alt"></i> </span>
                                                    <span class="elementor-button-text">Contact Us</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </header>
        <div data-elementor-type="wp-page" data-elementor-id="6" class="elementor elementor-6">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-2d51676 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="2d51676" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3b9dbb7"
                        data-id="3b9dbb7" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b8afff5 elementor-view-framed elementor-position-left elementor-widget__width-auto animated-slow elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box"
                                data-id="b8afff5" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <link rel="stylesheet"
                                        href="wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon elementor-animation-">
                                                <i aria-hidden="true" class="fas fa-ship"></i> </span>
                                        </div>
                                        <div class="elementor-icon-box-content">
                                            <h5 class="elementor-icon-box-title">
                                                <span>
                                                    Welcome to JVC Universal </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-29264eb animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="29264eb" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <style>
                                    /*! elementor - v3.17.0 - 08-11-2023 */
                                    .elementor-heading-title {
                                        padding: 0;
                                        margin: 0;
                                        line-height: 1
                                    }

                                    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                        color: inherit;
                                        font-size: inherit;
                                        line-height: inherit
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                        font-size: 15px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                        font-size: 19px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                        font-size: 29px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                        font-size: 39px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                        font-size: 59px
                                    }
                                    </style>
                                    <h2 class="elementor-heading-title elementor-size-default">Your Global Partner In
                                        Fmcg Trade</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3f9e83a animated-slow elementor-invisible elementor-widget elementor-widget-text-editor"
                                data-id="3f9e83a" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <style>
                                    /*! elementor - v3.17.0 - 08-11-2023 */
                                    .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                        background-color: #69727d;
                                        color: #fff
                                    }

                                    .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                        color: #69727d;
                                        border: 3px solid;
                                        background-color: transparent
                                    }

                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                        margin-top: 8px
                                    }

                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                        width: 1em;
                                        height: 1em
                                    }

                                    .elementor-widget-text-editor .elementor-drop-cap {
                                        float: left;
                                        text-align: center;
                                        line-height: 1;
                                        font-size: 50px
                                    }

                                    .elementor-widget-text-editor .elementor-drop-cap-letter {
                                        display: inline-block
                                    }
                                    </style>With a commitment to excellence, we connect markets, streamline supply
                                    chains, and deliver premium consumer goods to meet the demands of a dynamic global
                                    marketplace. Partner with us for innovative solutions and unmatched expertise in the
                                    FMCG industry.
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-99a7f51 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="99a7f51" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-38a50f3"
                                        data-id="38a50f3" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7bf8f9b elementor-align-left animated-slow elementor-mobile-align-left elementor-invisible elementor-widget elementor-widget-button"
                                                data-id="7bf8f9b" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                            href="#">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Know More</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-68ec165"
                        data-id="68ec165" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-81e3944 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="81e3944" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/www.youtube.com\/watch?v=DEmO758Llbc&quot;,&quot;background_video_start&quot;:0,&quot;background_video_end&quot;:16}">
                                <div class="elementor-background-video-container elementor-hidden-phone">
                                    <div class="elementor-background-video-embed"></div>
                                </div>
                                <div class="elementor-background-overlay"></div>
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-bfc6b2a"
                                        data-id="bfc6b2a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ab289b2 animated-slow e-transform elementor-invisible elementor-widget elementor-widget-image"
                                                data-id="ab289b2" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-30,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="242" height="1440"
                                                        src="wp-content/uploads/sites/241/2022/03/cargo-ship-full-loaded-with-containers-blue-sea-port.png"
                                                        class="attachment-full size-full wp-image-93" alt=""
                                                        srcset="https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/cargo-ship-full-loaded-with-containers-blue-sea-port.png 242w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/cargo-ship-full-loaded-with-containers-blue-sea-port-172x1024.png 172w"
                                                        sizes="(max-width: 242px) 100vw, 242px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-4c2324c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="4c2324c" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e86dbe0"
                        data-id="e86dbe0" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-0fc7201 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                                data-id="0fc7201" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6c356f1"
                                        data-id="6c356f1" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-394e84b elementor-widget elementor-widget-jkit_fun_fact"
                                                data-id="394e84b" data-element_type="widget"
                                                data-widget_type="jkit_fun_fact.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_6_1_67a1d552eec74">
                                                        <div class=fun-fact-inner>
                                                            <div class="content">
                                                                <div class="number-wrapper"><span class="prefix"></span>
                                                                    <span class="number" data-value="1852"
                                                                        data-animation-duration="3500">0</span>
                                                                    <span class="suffix"></span><sup
                                                                        class="super">+</sup>
                                                                </div>
                                                                <span class="title">Client Satisfaction With Our
                                                                    Services</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ef13ad7"
                                        data-id="ef13ad7" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-eaa9147 elementor-widget elementor-widget-jkit_fun_fact"
                                                data-id="eaa9147" data-element_type="widget"
                                                data-widget_type="jkit_fun_fact.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_6_2_67a1d552f0686">
                                                        <div class=fun-fact-inner>
                                                            <div class="content">
                                                                <div class="number-wrapper"><span class="prefix"></span>
                                                                    <span class="number" data-value="3778"
                                                                        data-animation-duration="3500">0</span>
                                                                    <span class="suffix"></span><sup
                                                                        class="super">+</sup>
                                                                </div>
                                                                <span class="title">Project Completed By Our
                                                                    Service</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3656d19"
                        data-id="3656d19" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a72d8c3 animated-slow elementor-invisible elementor-widget elementor-widget-jkit_client_logo"
                                data-id="a72d8c3" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                data-widget_type="jkit_client_logo.default">
                                <div class="elementor-widget-container">
                                    <div class="jeg-elementor-kit jkit-client-logo arrow-bottom-middle jeg_module_6_3_67a1d553005dd"
                                        data-id="jeg_module_6_3_67a1d553005dd"
                                        data-settings="{&quot;autoplay&quot;:false,&quot;autoplay_speed&quot;:3500,&quot;autoplay_hover_pause&quot;:false,&quot;show_navigation&quot;:false,&quot;navigation_left&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-left\&quot;&gt;&lt;\/i&gt;&quot;,&quot;navigation_right&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-right\&quot;&gt;&lt;\/i&gt;&quot;,&quot;show_dots&quot;:false,&quot;arrow_position&quot;:&quot;bottom&quot;,&quot;responsive&quot;:{&quot;desktop&quot;:{&quot;items&quot;:3,&quot;margin&quot;:10,&quot;breakpoint&quot;:1025},&quot;tablet&quot;:{&quot;items&quot;:2,&quot;margin&quot;:10,&quot;breakpoint&quot;:768},&quot;mobile&quot;:{&quot;items&quot;:2,&quot;margin&quot;:10,&quot;breakpoint&quot;:0}}}">
                                        <div class="client-list">
                                            <div class="client-track">
                                                <div class="client-slider item ">
                                                    <div class="image-list">
                                                        <div class="content-image"><img decoding="async"
                                                                src="wp-content/uploads/sites/241/2022/03/Logo-9VAKXU%402x-300x110.png"
                                                                class="main-image" alt="Title"></div>
                                                    </div>
                                                </div>
                                                <div class="client-slider item ">
                                                    <div class="image-list">
                                                        <div class="content-image"><img decoding="async"
                                                                src="wp-content/uploads/sites/241/2022/03/Logo-89Q2DZ%402x-300x106.png"
                                                                class="main-image" alt="Title"></div>
                                                    </div>
                                                </div>
                                                <div class="client-slider item ">
                                                    <div class="image-list">
                                                        <div class="content-image"><img decoding="async"
                                                                src="wp-content/uploads/sites/241/2022/03/Logo-JQLHGD%402x-300x115.png"
                                                                class="main-image" alt="Title"></div>
                                                    </div>
                                                </div>
                                                <div class="client-slider item ">
                                                    <div class="image-list">
                                                        <div class="content-image"><img decoding="async"
                                                                src="wp-content/uploads/sites/241/2022/03/Logo-Y7FDGX%402x-300x114.png"
                                                                class="main-image" alt="Title"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-fc5c613 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="fc5c613" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d955eb5"
                        data-id="d955eb5" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7695e4a elementor-widget elementor-widget-image"
                                data-id="7695e4a" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async"
                                        src="wp-content/uploads/sites/241/elementor/thumbs/container-cargo-port-ship-yard-storage-handling-of-logistic-transportation-industry-row-of-stacking-e1647242904544-pluebmeppnzyk3um1l"
                                        title="Container Cargo Port Ship Yard Storage Handling of Logistic Transportation Industry. Row of Stacking"
                                        alt="Container Cargo Port Ship Yard Storage Handling of Logistic Transportation Industry. Row of Stacking"
                                        loading="lazy" />
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7e49f1a elementor-widget elementor-widget-image"
                                data-id="7e49f1a" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async"
                                        src="wp-content/uploads/sites/241/elementor/thumbs/portrait-of-foreman-worker-standing-at-container-cargo-harbor-to-loading-containers-plk36b2o7emp6ke9sb4tjn77ryi6c32icy0vrotjpc.24.del"
                                        title="Portrait of foreman worker standing at Container cargo harbor to loading containers"
                                        alt="Portrait of foreman worker standing at Container cargo harbor to loading containers"
                                        loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f45727f"
                        data-id="f45727f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-32fb32f elementor-view-framed elementor-position-left elementor-widget__width-auto animated-slow elementor-vertical-align-middle elementor-widget-mobile__width-auto elementor-shape-circle elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box"
                                data-id="32fb32f" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon elementor-animation-">
                                                <i aria-hidden="true" class="fas fa-ship"></i> </span>
                                        </div>
                                        <div class="elementor-icon-box-content">
                                            <h5 class="elementor-icon-box-title">
                                                <span>
                                                    About Us </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-912a057 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="912a057" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">A Bit on JVC Universal</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1aefd8a elementor-widget elementor-widget-text-editor"
                                data-id="1aefd8a" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
								Since our establishment in October 2024, we have been dedicated to importing, exporting, and distributing high-quality Fast Moving Consumer Goods (FMCG). By bridging global markets with efficient supply chains and dependable service, we focus on fostering strong relationships, maintaining exceptional quality, and delivering cross-border excellence to empower your business. </div>
                            </div>
                            <!-- <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-c364209 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="c364209" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7a26134"
                                        data-id="7a26134" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-9cf4484 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="9cf4484" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <link rel="stylesheet"
                                                        href="wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Fastest
                                                                Delivery</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Secure & Safe</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Affordable
                                                                Price</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-543b516"
                                        data-id="543b516" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-f3ce9e7 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="f3ce9e7" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Customer
                                                                Support</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">High
                                                                Maintenance</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">World-wide
                                                                Shipping</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> -->
                            <!-- <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-911c206 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="911c206" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-dc7d417"
                                        data-id="dc7d417" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3efb78e elementor-widget__width-auto elementor-absolute elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="3efb78e" data-element_type="widget"
                                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon">
                                                            <i aria-hidden="true" class="jki jki-quote1-light"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7462a32 elementor-widget elementor-widget-text-editor"
                                                data-id="7462a32" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore </div>
                                            </div>
                                            <div class="elementor-element elementor-element-131f98b elementor-widget elementor-widget-text-editor"
                                                data-id="131f98b" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    Joseph Garza </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> -->
                            <div class="elementor-element elementor-element-87447fc elementor-align-left elementor-widget elementor-widget-button"
                                data-id="87447fc" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                            href="#">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">More About Us</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-83dd2d5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="83dd2d5" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-21f5c27"
                        data-id="21f5c27" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-16ec0a6 elementor-view-framed elementor-position-left elementor-widget__width-auto animated-slow elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box"
                                data-id="16ec0a6" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon elementor-animation-">
                                                <i aria-hidden="true" class="fas fa-ship"></i> </span>
                                        </div>
                                        <div class="elementor-icon-box-content">
                                            <h5 class="elementor-icon-box-title">
                                                <span>
                                                    Contact Us </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-24b9577 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="24b9577" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Global FMCG Success with JVC Universal</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a02fe9e elementor-widget elementor-widget-text-editor"
                                data-id="a02fe9e" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Your Partner in Quality, Efficiency, and Excellence!</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4cbd00a elementor-align-center animated-slow elementor-mobile-align-center elementor-invisible elementor-widget elementor-widget-button"
                                data-id="4cbd00a" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                            href="#">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Contact Us Now</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-8347380 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="8347380" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-573bf47"
                        data-id="573bf47" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-cf79b12 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="cf79b12" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-453ba57"
                                        data-id="453ba57" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ea480cf elementor-view-framed elementor-position-left elementor-widget__width-auto animated-slow elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box"
                                                data-id="ea480cf" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-ship"></i> </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h5 class="elementor-icon-box-title">
                                                                <span>
																Our Expertise</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-fb1b257 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                data-id="fb1b257" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">We Provide The Best In Need.</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ebd392a elementor-widget elementor-widget-text-editor"
                                                data-id="ebd392a" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Proin ullamcorper pretium orci. Donec nec scelerisque leo. Nam
                                                        massa dolor imperdiet nec consequata congue idsem. Maecenas
                                                        malesuada faucibus finibus. Donec vitae libero porttitor laoreet
                                                        sapiena ultrices.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-793f0d2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="793f0d2" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4a7e739"
                                        data-id="4a7e739" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-8b196f6 elementor-view-stacked elementor-shape-square elementor-position-left elementor-vertical-align-middle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                data-id="8b196f6" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="jki jki-ship-solid"></i>
                                                            </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h3 class="elementor-icon-box-title">
                                                                <span>
																Import & Export </span>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b37a9bf elementor-widget elementor-widget-text-editor"
                                                data-id="b37a9bf" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
												We specialize in easy cross-border FMCG trade, using our global network to simplify logistics and deliver products on time, every time. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-eb9eb42"
                                        data-id="eb9eb42" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2db8fcf elementor-view-stacked elementor-shape-square elementor-position-left elementor-vertical-align-middle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                data-id="2db8fcf" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-warehouse-solid"></i> </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h3 class="elementor-icon-box-title">
                                                                <span>
																Import & Export </span>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e9ca70f elementor-widget elementor-widget-text-editor"
                                                data-id="e9ca70f" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
												We specialize in easy cross-border FMCG trade, using our global network to simplify logistics and deliver products on time, every time. </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-da55259"
                                        data-id="da55259" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-6c8cb29 elementor-view-stacked elementor-shape-square elementor-position-left elementor-vertical-align-middle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                data-id="6c8cb29" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="jki jki-pallet-solid"></i>
                                                            </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h3 class="elementor-icon-box-title">
                                                                <span>
																Brand Distribution </span>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-dfff1ed elementor-widget elementor-widget-text-editor"
                                                data-id="dfff1ed" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
												JVC connects leading FMCG brands with global markets, allowing thorough distribution, expansion, and access to top-quality products for mutual growth. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-cb682f4"
                                        data-id="cb682f4" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7f9aa00 elementor-view-stacked elementor-shape-square elementor-position-left elementor-vertical-align-middle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                data-id="7f9aa00" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-shipping-fast-solid"></i> </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h3 class="elementor-icon-box-title">
                                                                <span>
																Supply Chain Solutions </span>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-8197139 elementor-widget elementor-widget-text-editor"
                                                data-id="8197139" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
												JVC’s end-to-end supply chain solutions sourcing, warehousing, packaging, labeling, and shipping, delivering products efficiently and cost-effectively to their destination.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-21c8994 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="21c8994" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-64eee11"
                        data-id="64eee11" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-ad21bfc elementor-widget elementor-widget-image"
                                data-id="ad21bfc" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="1920" height="1280"
                                        src="wp-content/uploads/sites/241/2022/03/technician-and-engineer-work-together-for-checking-quality-and-product-in-cargo-container-e1647243134554.jpg"
                                        class="attachment-full size-full wp-image-296"
                                        alt="Technician and engineer work together for checking quality and product in cargo container" />
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-a668190 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                                data-id="a668190" data-element_type="section"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-372c5cd"
                                        data-id="372c5cd" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-fc2fa0d elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="fc2fa0d" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="jki jki-Helmet-light"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Professionals
                                                                Worker</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-42e3e71 elementor-widget elementor-widget-text-editor"
                                                data-id="42e3e71" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                                    tellus. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-09c016d"
                        data-id="09c016d" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-501a70f elementor-view-framed elementor-position-left elementor-widget__width-auto animated-slow elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box"
                                data-id="501a70f" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon elementor-animation-">
                                                <i aria-hidden="true" class="fas fa-ship"></i> </span>
                                        </div>
                                        <div class="elementor-icon-box-content">
                                            <h5 class="elementor-icon-box-title">
                                                <span>
                                                    Professional Worker </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-8c61dce animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="8c61dce" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Skillful and Professional
                                        Worker Doing The Job</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-fa93e18 elementor-widget elementor-widget-text-editor"
                                data-id="fa93e18" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    Dolor Ipsum Proin ullamcorper pretium orci. Donec nec scelerisque leo. Nam massa
                                    dolor imperdiet nec consequata congue idsem. Maecenas malesuada faucibus finibus.
                                    Donec vitae libero porttitor laoreet sapiena ultrices. </div>
                            </div>
                            <div class="elementor-element elementor-element-d305b94 elementor-widget elementor-widget-jkit_progress_bar"
                                data-id="d305b94" data-element_type="widget"
                                data-widget_type="jkit_progress_bar.default">
                                <div class="elementor-widget-container">
                                    <div class="jeg-elementor-kit jkit-progress-bar jeg_module_6_4_67a1d55328bb4">
                                        <div class="progress-group ">
                                            <div class="progress-skill-bar">
                                                <div class="skill-bar-content"><span class="skill-title">Communication
                                                        Skill</span></div>
                                                <div class="skill-bar">
                                                    <div class="skill-track">

                                                        <div class="number-percentage-wrapper">
                                                            <span class="number-percentage" data-value="90"
                                                                data-animation-duration="3500">90%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-fc6a355 elementor-widget elementor-widget-jkit_progress_bar"
                                data-id="fc6a355" data-element_type="widget"
                                data-widget_type="jkit_progress_bar.default">
                                <div class="elementor-widget-container">
                                    <div class="jeg-elementor-kit jkit-progress-bar jeg_module_6_5_67a1d5532987b">
                                        <div class="progress-group ">
                                            <div class="progress-skill-bar">
                                                <div class="skill-bar-content"><span class="skill-title">Shipping
                                                        Knowledge</span></div>
                                                <div class="skill-bar">
                                                    <div class="skill-track">

                                                        <div class="number-percentage-wrapper">
                                                            <span class="number-percentage" data-value="95"
                                                                data-animation-duration="3500">95%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d6ba7bd elementor-widget elementor-widget-jkit_progress_bar"
                                data-id="d6ba7bd" data-element_type="widget"
                                data-widget_type="jkit_progress_bar.default">
                                <div class="elementor-widget-container">
                                    <div class="jeg-elementor-kit jkit-progress-bar jeg_module_6_6_67a1d5532aa96">
                                        <div class="progress-group ">
                                            <div class="progress-skill-bar">
                                                <div class="skill-bar-content"><span class="skill-title">Worker
                                                        Equipment</span></div>
                                                <div class="skill-bar">
                                                    <div class="skill-track">

                                                        <div class="number-percentage-wrapper">
                                                            <span class="number-percentage" data-value="87"
                                                                data-animation-duration="3500">87%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3192bc5 elementor-widget elementor-widget-jkit_progress_bar"
                                data-id="3192bc5" data-element_type="widget"
                                data-widget_type="jkit_progress_bar.default">
                                <div class="elementor-widget-container">
                                    <div class="jeg-elementor-kit jkit-progress-bar jeg_module_6_7_67a1d5532b499">
                                        <div class="progress-group ">
                                            <div class="progress-skill-bar">
                                                <div class="skill-bar-content"><span class="skill-title">On-Time
                                                        Progress</span></div>
                                                <div class="skill-bar">
                                                    <div class="skill-track">

                                                        <div class="number-percentage-wrapper">
                                                            <span class="number-percentage" data-value="85"
                                                                data-animation-duration="3500">85%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-cc60b36 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="cc60b36" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-52daa0c"
                        data-id="52daa0c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-fc486ac elementor-view-framed elementor-position-left elementor-widget__width-auto animated-slow elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box"
                                data-id="fc486ac" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon elementor-animation-">
                                                <i aria-hidden="true" class="fas fa-ship"></i> </span>
                                        </div>
                                        <div class="elementor-icon-box-content">
                                            <h5 class="elementor-icon-box-title">
                                                <span>
                                                    Why Choose Us </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-8ce9070 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="8ce9070" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Trusted By More Than 150+
                                        Partners In The World</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-abb858e elementor-widget elementor-widget-text-editor"
                                data-id="abb858e" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Proin ullamcorper pretium orci. Donec nec scelerisque leo. Nam massa dolor
                                        imperdiet nec consequata congue idsem. Maecenas malesuada faucibus finibus.
                                        Donec vitae libero porttitor laoreet sapiena ultrices.</p>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-bdc1cc6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="bdc1cc6" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b4860f4"
                                        data-id="b4860f4" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-89e7b50 elementor-view-stacked elementor-shape-square elementor-position-left elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                data-id="89e7b50" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-stopwatch-light"></i> </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h3 class="elementor-icon-box-title">
                                                                <span>
                                                                    On-Time Shipping </span>
                                                            </h3>
                                                            <p class="elementor-icon-box-description">
                                                                Lorem ipsum dolor. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fd11458"
                                        data-id="fd11458" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-060fc0e elementor-view-stacked elementor-shape-square elementor-position-left elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                data-id="060fc0e" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true"
                                                                    class="jki jki-save-money-light"></i> </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h3 class="elementor-icon-box-title">
                                                                <span>
                                                                    Affordable Price </span>
                                                            </h3>
                                                            <p class="elementor-icon-box-description">
                                                                Lorem ipsum dolor. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-467e517"
                        data-id="467e517" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-9ac935b elementor-widget elementor-widget-image"
                                data-id="9ac935b" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="800" height="454"
                                        src="wp-content/uploads/sites/241/2022/03/globe-3-1024x581.png"
                                        class="attachment-large size-large wp-image-468" alt=""
                                        srcset="https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/globe-3-1024x581.png 1024w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/globe-3-300x170.png 300w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/globe-3-768x436.png 768w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/globe-3-1536x872.png 1536w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/globe-3-800x454.png 800w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/globe-3.png 1920w"
                                        sizes="(max-width: 800px) 100vw, 800px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-cb2ae66 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="cb2ae66" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a3f65bd"
                        data-id="a3f65bd" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-65a69a5 elementor-view-framed elementor-position-left elementor-widget__width-auto animated-slow elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box"
                                data-id="65a69a5" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon elementor-animation-">
                                                <i aria-hidden="true" class="fas fa-ship"></i> </span>
                                        </div>
                                        <div class="elementor-icon-box-content">
                                            <h5 class="elementor-icon-box-title">
                                                <span>
                                                    Client Testimonial </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a0829dd animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="a0829dd" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">More Than 40+ Satisfied
                                        Client Testimonial</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-e167bf5 elementor-widget elementor-widget-text-editor"
                                data-id="e167bf5" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f81a837"
                        data-id="f81a837" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c49ca3c animated-slow elementor-invisible elementor-widget elementor-widget-jkit_testimonials"
                                data-id="c49ca3c" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                                data-widget_type="jkit_testimonials.default">
                                <div class="elementor-widget-container">
                                    <div class="jeg-elementor-kit jkit-testimonials arrow-middle-edge style-2 quote-override jeg_module_6_8_67a1d55338580"
                                        data-id="jeg_module_6_8_67a1d55338580"
                                        data-settings="{&quot;autoplay&quot;:true,&quot;autoplay_speed&quot;:3500,&quot;autoplay_hover_pause&quot;:false,&quot;show_navigation&quot;:false,&quot;navigation_left&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-left\&quot;&gt;&lt;\/i&gt;&quot;,&quot;navigation_right&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-right\&quot;&gt;&lt;\/i&gt;&quot;,&quot;show_dots&quot;:true,&quot;arrow_position&quot;:&quot;bottom&quot;,&quot;responsive&quot;:{&quot;desktop&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:1025},&quot;tablet&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:768},&quot;mobile&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:0}}}">
                                        <div class="testimonials-list">
                                            <div class="testimonials-track">
                                                <div class="testimonial-item  elementor-repeater-item-6e9b2e1">
                                                    <div class="testimonial-box hover-from-left">
                                                        <div class="icon-content"><i aria-hidden="true"
                                                                class="jki jki-quote-light"></i></div>
                                                        <div class="comment-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                sed do eiusmod tempor incididunt ut labore et dolore
                                                                magna aliqua Ut enim ad minim veniam</p>
                                                        </div>
                                                        <div class="comment-header">
                                                            <ul class="rating-stars"></ul>
                                                        </div>
                                                        <div class="comment-bio">
                                                            <div class="bio-details">
                                                                <div class="profile-image"><img decoding="async"
                                                                        src="wp-content/uploads/sites/241/2022/03/PCXJHSB-2-300x300.jpg"
                                                                        alt="Shelby Cairns"></div>
                                                                <span class="profile-info">
                                                                    <strong class="profile-name">Shelby Cairns</strong>
                                                                    <p class="profile-des">Entrepreneur</p>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-item  elementor-repeater-item-d069a43">
                                                    <div class="testimonial-box hover-from-left">
                                                        <div class="icon-content"><i aria-hidden="true"
                                                                class="jki jki-quote-light"></i></div>
                                                        <div class="comment-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                sed do eiusmod tempor incididunt ut labore et dolore
                                                                magna aliqua Ut enim ad minim veniam</p>
                                                        </div>
                                                        <div class="comment-header">
                                                            <ul class="rating-stars"></ul>
                                                        </div>
                                                        <div class="comment-bio">
                                                            <div class="bio-details">
                                                                <div class="profile-image"><img decoding="async"
                                                                        src="wp-content/uploads/sites/241/2022/03/E4Z6KX9-300x300.jpg"
                                                                        alt="Catrina Yoder"></div>
                                                                <span class="profile-info">
                                                                    <strong class="profile-name">Catrina Yoder</strong>
                                                                    <p class="profile-des">CEO Bciaga</p>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-item  elementor-repeater-item-05c24f5">
                                                    <div class="testimonial-box hover-from-left">
                                                        <div class="icon-content"><i aria-hidden="true"
                                                                class="jki jki-quote-light"></i></div>
                                                        <div class="comment-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                sed do eiusmod tempor incididunt ut labore et dolore
                                                                magna aliqua Ut enim ad minim veniam</p>
                                                        </div>
                                                        <div class="comment-header">
                                                            <ul class="rating-stars"></ul>
                                                        </div>
                                                        <div class="comment-bio">
                                                            <div class="bio-details">
                                                                <div class="profile-image"><img decoding="async"
                                                                        src="wp-content/uploads/sites/241/2022/03/3PQNVSH-300x300.jpg"
                                                                        alt="Syeda Bright"></div>
                                                                <span class="profile-info">
                                                                    <strong class="profile-name">Syeda Bright</strong>
                                                                    <p class="profile-des">Businessman</p>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-09bc712 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="09bc712" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4bbeea7"
                        data-id="4bbeea7" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-cc5e5ac elementor-view-framed elementor-position-left elementor-widget__width-auto animated-slow elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box"
                                data-id="cc5e5ac" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon elementor-animation-">
                                                <i aria-hidden="true" class="fas fa-ship"></i> </span>
                                        </div>
                                        <div class="elementor-icon-box-content">
                                            <h5 class="elementor-icon-box-title">
                                                <span>
                                                    Our Blog </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-67d5656 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="67d5656" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Latest Blog & Articles
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ff1dd1f elementor-widget elementor-widget-text-editor"
                                data-id="ff1dd1f" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua </div>
                            </div>
                            <div class="elementor-element elementor-element-e9eedee elementor-widget elementor-widget-jkit_post_block"
                                data-id="e9eedee" data-element_type="widget" data-widget_type="jkit_post_block.default">
                                <div class="elementor-widget-container">
                                    <div class="jeg-elementor-kit jkit-postblock postblock-type-3 jkit-pagination-disable post-element jeg_module_6_9_67a1d553440fa"
                                        data-id="jeg_module_6_9_67a1d553440fa"
                                        data-settings="{&quot;post_type&quot;:&quot;post&quot;,&quot;number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;post_offset&quot;:0,&quot;unique_content&quot;:&quot;disable&quot;,&quot;include_post&quot;:&quot;&quot;,&quot;exclude_post&quot;:&quot;&quot;,&quot;include_category&quot;:&quot;&quot;,&quot;exclude_category&quot;:&quot;&quot;,&quot;include_author&quot;:&quot;&quot;,&quot;include_tag&quot;:&quot;&quot;,&quot;exclude_tag&quot;:&quot;&quot;,&quot;sort_by&quot;:&quot;latest&quot;,&quot;pagination_mode&quot;:&quot;disable&quot;,&quot;pagination_loadmore_text&quot;:&quot;Load More&quot;,&quot;pagination_loading_text&quot;:&quot;Loading...&quot;,&quot;pagination_number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;pagination_scroll_limit&quot;:0,&quot;pagination_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;pagination_icon_position&quot;:&quot;before&quot;,&quot;st_category_position&quot;:&quot;left&quot;,&quot;sg_content_postblock_type&quot;:&quot;type-3&quot;,&quot;sg_content_element_order&quot;:&quot;title,meta,excerpt,read&quot;,&quot;sg_content_breakpoint&quot;:&quot;tablet&quot;,&quot;sg_content_title_html_tag&quot;:&quot;h4&quot;,&quot;sg_content_category_enable&quot;:&quot;yes&quot;,&quot;sg_content_excerpt_enable&quot;:&quot;yes&quot;,&quot;sg_content_excerpt_length&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:18,&quot;sizes&quot;:[]},&quot;sg_content_excerpt_more&quot;:&quot;...&quot;,&quot;sg_content_readmore_enable&quot;:&quot;yes&quot;,&quot;sg_content_readmore_icon&quot;:{&quot;value&quot;:&quot;fas fa-arrow-right&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_readmore_icon_position&quot;:&quot;after&quot;,&quot;sg_content_readmore_text&quot;:&quot;Read More&quot;,&quot;sg_content_comment_enable&quot;:&quot;&quot;,&quot;sg_content_comment_icon&quot;:{&quot;value&quot;:&quot;fas fa-comment&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_comment_icon_position&quot;:&quot;before&quot;,&quot;sg_content_meta_enable&quot;:&quot;&quot;,&quot;sg_content_meta_author_enable&quot;:&quot;&quot;,&quot;sg_content_meta_author_by_text&quot;:&quot;by&quot;,&quot;sg_content_meta_author_icon&quot;:{&quot;value&quot;:&quot;fas fa-user&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_meta_author_icon_position&quot;:&quot;before&quot;,&quot;sg_content_meta_date_enable&quot;:&quot;&quot;,&quot;sg_content_meta_date_type&quot;:&quot;published&quot;,&quot;sg_content_meta_date_format&quot;:&quot;default&quot;,&quot;sg_content_meta_date_format_custom&quot;:&quot;F j, Y&quot;,&quot;sg_content_meta_date_icon&quot;:{&quot;value&quot;:&quot;fas fa-clock&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_meta_date_icon_position&quot;:&quot;before&quot;,&quot;sg_content_image_size_imagesize_size&quot;:&quot;full&quot;,&quot;paged&quot;:1,&quot;class&quot;:&quot;jkit_post_block&quot;}">
                                        <div class="jkit-block-container">
                                            <div class="jkit-posts jkit-ajax-flag">
                                                <article
                                                    class="jkit-post post-1228 post type-post status-publish format-standard has-post-thumbnail hentry category-shipping tag-freight tag-news">
                                                    <div class="jkit-thumb"><a
                                                            href="2022/03/14/delivery-contractors-blame-fedex-for-bad-holiday-season/index.html">
                                                            <div class="thumbnail-container ">
                                                                <img loading="lazy" decoding="async" width="2000"
                                                                    height="1450"
                                                                    src="wp-content/uploads/sites/241/2022/03/delivery-messenger-carrying-courier-shipping-mail.jpg"
                                                                    class="attachment-full size-full wp-post-image"
                                                                    alt="Delivery Messenger Carrying Courier Shipping Mail"
                                                                    srcset="https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/delivery-messenger-carrying-courier-shipping-mail.jpg 2000w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/delivery-messenger-carrying-courier-shipping-mail-300x218.jpg 300w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/delivery-messenger-carrying-courier-shipping-mail-1024x742.jpg 1024w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/delivery-messenger-carrying-courier-shipping-mail-768x557.jpg 768w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/delivery-messenger-carrying-courier-shipping-mail-1536x1114.jpg 1536w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/delivery-messenger-carrying-courier-shipping-mail-800x580.jpg 800w"
                                                                    sizes="(max-width: 2000px) 100vw, 2000px" />
                                                            </div>
                                                        </a>
                                                        <div class="jkit-post-category position-left"><span><a
                                                                    href="category/shipping/index.html"
                                                                    class="category-shipping">Shipping</a></span></div>
                                                    </div>
                                                    <div class="jkit-postblock-content">
                                                        <h4 class="jkit-post-title">
                                                            <a
                                                                href="2022/03/14/delivery-contractors-blame-fedex-for-bad-holiday-season/index.html">Delivery
                                                                Contractors Blame FedEx for Bad Holiday Season</a>
                                                        </h4>
                                                        <div class="jkit-post-excerpt">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget dolor. Aenean massa. Cum
                                                                sociis natoque...</p>
                                                        </div>
                                                        <div class="jkit-post-meta-bottom">
                                                            <div class="jkit-meta-readmore icon-position-after">
                                                                <a href="2022/03/14/delivery-contractors-blame-fedex-for-bad-holiday-season/index.html"
                                                                    class="jkit-readmore">Read More<i aria-hidden="true"
                                                                        class="fas fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article
                                                    class="jkit-post post-401 post type-post status-publish format-standard has-post-thumbnail hentry category-logistic tag-freight tag-news">
                                                    <div class="jkit-thumb"><a
                                                            href="2022/03/09/shipping-containers-get-foldable-design-as-logjam-cure/index.html">
                                                            <div class="thumbnail-container ">
                                                                <img loading="lazy" decoding="async" width="1920"
                                                                    height="1440"
                                                                    src="wp-content/uploads/sites/241/2022/03/business-man-with-shipping-containers-e1647243205349.jpg"
                                                                    class="attachment-full size-full wp-post-image"
                                                                    alt="business man with shipping containers" />
                                                            </div>
                                                        </a>
                                                        <div class="jkit-post-category position-left"><span><a
                                                                    href="category/logistic/index.html"
                                                                    class="category-logistic">Logistic</a></span></div>
                                                    </div>
                                                    <div class="jkit-postblock-content">
                                                        <h4 class="jkit-post-title">
                                                            <a
                                                                href="2022/03/09/shipping-containers-get-foldable-design-as-logjam-cure/index.html">Shipping
                                                                containers get foldable design as logjam cure</a>
                                                        </h4>
                                                        <div class="jkit-post-excerpt">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget dolor. Aenean massa. Cum
                                                                sociis natoque...</p>
                                                        </div>
                                                        <div class="jkit-post-meta-bottom">
                                                            <div class="jkit-meta-readmore icon-position-after">
                                                                <a href="2022/03/09/shipping-containers-get-foldable-design-as-logjam-cure/index.html"
                                                                    class="jkit-readmore">Read More<i aria-hidden="true"
                                                                        class="fas fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article
                                                    class="jkit-post post-398 post type-post status-publish format-standard has-post-thumbnail hentry category-shipping tag-freight tag-news">
                                                    <div class="jkit-thumb"><a
                                                            href="2022/03/09/samudera-shipping-reaps-rewards-from-skyrocketing-prices/index.html">
                                                            <div class="thumbnail-container ">
                                                                <img loading="lazy" decoding="async" width="2000"
                                                                    height="1333"
                                                                    src="wp-content/uploads/sites/241/2022/03/container-operation.jpg"
                                                                    class="attachment-full size-full wp-post-image"
                                                                    alt="container operation"
                                                                    srcset="https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/container-operation.jpg 2000w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/container-operation-300x200.jpg 300w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/container-operation-1024x682.jpg 1024w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/container-operation-768x512.jpg 768w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/container-operation-1536x1024.jpg 1536w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/container-operation-800x533.jpg 800w"
                                                                    sizes="(max-width: 2000px) 100vw, 2000px" />
                                                            </div>
                                                        </a>
                                                        <div class="jkit-post-category position-left"><span><a
                                                                    href="category/shipping/index.html"
                                                                    class="category-shipping">Shipping</a></span></div>
                                                    </div>
                                                    <div class="jkit-postblock-content">
                                                        <h4 class="jkit-post-title">
                                                            <a
                                                                href="2022/03/09/samudera-shipping-reaps-rewards-from-skyrocketing-prices/index.html">Samudera
                                                                Shipping reaps rewards from skyrocketing prices</a>
                                                        </h4>
                                                        <div class="jkit-post-excerpt">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget dolor. Aenean massa. Cum
                                                                sociis natoque...</p>
                                                        </div>
                                                        <div class="jkit-post-meta-bottom">
                                                            <div class="jkit-meta-readmore icon-position-after">
                                                                <a href="2022/03/09/samudera-shipping-reaps-rewards-from-skyrocketing-prices/index.html"
                                                                    class="jkit-readmore">Read More<i aria-hidden="true"
                                                                        class="fas fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
        </div>
        <footer itemscope="itemscope" itemtype="https://schema.org/WPFooter">
            <style>
            .elementor-421 .elementor-element.elementor-element-034debd>.elementor-container {
                max-width: 1170px;
            }

            .elementor-421 .elementor-element.elementor-element-034debd:not(.elementor-motion-effects-element-type-background),
            .elementor-421 .elementor-element.elementor-element-034debd>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: var(--e-global-color-d9dfe23);
                background-image: url("wp-content/uploads/sites/241/2022/03/aerial-view-on-ocean-s-waves--e1647242877756.jpg");
                background-position: top center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .elementor-421 .elementor-element.elementor-element-034debd>.elementor-background-overlay {
                background-color: var(--e-global-color-ad8e29f);
                opacity: 0.8;
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-034debd {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 85px 0px 20px 0px;
            }

            .elementor-421 .elementor-element.elementor-element-031e7aa>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 10px 10px 10px;
            }

            .elementor-421 .elementor-element.elementor-element-125baa2>.elementor-container {
                max-width: 1170px;
            }

            .elementor-421 .elementor-element.elementor-element-125baa2 {
                margin-top: 0px;
                margin-bottom: 0px;
            }

            .elementor-421 .elementor-element.elementor-element-10a92e0>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                margin: 0px 30px 0px 0px;
                --e-column-margin-right: 30px;
                --e-column-margin-left: 0px;
            }

            .elementor-421 .elementor-element.elementor-element-10a92e0>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-b4b27b6 {
                text-align: left;
            }

            .elementor-421 .elementor-element.elementor-element-b4b27b6 img {
                width: 64%;
            }

            .elementor-421 .elementor-element.elementor-element-40a893c {
                color: #FFFFFF;
                font-family: var(--e-global-typography-text-font-family), Sans-serif;
                font-size: var(--e-global-typography-text-font-size);
                font-weight: var(--e-global-typography-text-font-weight);
            }

            .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                padding-bottom: calc(15px/2);
            }

            .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                margin-top: calc(15px/2);
            }

            .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                margin-right: calc(15px/2);
                margin-left: calc(15px/2);
            }

            .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-items.elementor-inline-items {
                margin-right: calc(-15px/2);
                margin-left: calc(-15px/2);
            }

            body.rtl .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                left: calc(-15px/2);
            }

            body:not(.rtl) .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                right: calc(-15px/2);
            }

            .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-icon i {
                color: var(--e-global-color-9ab75bb);
                transition: color 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-icon svg {
                fill: var(--e-global-color-9ab75bb);
                transition: fill 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-dc23c45 {
                --e-icon-list-icon-size: 14px;
                --icon-vertical-offset: 0px;
            }

            .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-icon {
                padding-right: 8px;
            }

            .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-item>a {
                font-family: var(--e-global-typography-text-font-family), Sans-serif;
                font-size: var(--e-global-typography-text-font-size);
                font-weight: var(--e-global-typography-text-font-weight);
            }

            .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-text {
                color: #FFFFFF;
                transition: color 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-item:hover .elementor-icon-list-text {
                color: var(--e-global-color-9ab75bb);
            }

            .elementor-421 .elementor-element.elementor-element-ad403e3 {
                text-align: left;
            }

            .elementor-421 .elementor-element.elementor-element-ad403e3 .elementor-heading-title {
                color: var(--e-global-color-9ab75bb);
                font-family: "Be Vietnam", Sans-serif;
                font-size: 22px;
                font-weight: 600;
            }

            .elementor-421 .elementor-element.elementor-element-ad403e3>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-421 .elementor-element.elementor-element-2f3e87d {
                --divider-border-style: solid;
                --divider-color: #FFFFFF30;
                --divider-border-width: 1px;
            }

            .elementor-421 .elementor-element.elementor-element-2f3e87d .elementor-divider-separator {
                width: 100px;
            }

            .elementor-421 .elementor-element.elementor-element-2f3e87d .elementor-divider {
                padding-top: 2px;
                padding-bottom: 2px;
            }

            .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                padding-bottom: calc(13px/2);
            }

            .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                margin-top: calc(13px/2);
            }

            .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                margin-right: calc(13px/2);
                margin-left: calc(13px/2);
            }

            .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-items.elementor-inline-items {
                margin-right: calc(-13px/2);
                margin-left: calc(-13px/2);
            }

            body.rtl .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                left: calc(-13px/2);
            }

            body:not(.rtl) .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                right: calc(-13px/2);
            }

            .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-icon i {
                transition: color 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-icon svg {
                transition: fill 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-440a278 {
                --e-icon-list-icon-size: 14px;
                --icon-vertical-offset: 0px;
            }

            .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-item>a {
                font-family: var(--e-global-typography-text-font-family), Sans-serif;
                font-size: var(--e-global-typography-text-font-size);
                font-weight: var(--e-global-typography-text-font-weight);
            }

            .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-text {
                color: #FFFFFF;
                transition: color 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-item:hover .elementor-icon-list-text {
                color: var(--e-global-color-9ab75bb);
            }

            .elementor-421 .elementor-element.elementor-element-20a1403 {
                text-align: left;
            }

            .elementor-421 .elementor-element.elementor-element-20a1403 .elementor-heading-title {
                color: var(--e-global-color-9ab75bb);
                font-family: "Be Vietnam", Sans-serif;
                font-size: 22px;
                font-weight: 600;
            }

            .elementor-421 .elementor-element.elementor-element-20a1403>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-421 .elementor-element.elementor-element-b0cf99d {
                --divider-border-style: solid;
                --divider-color: #FFFFFF30;
                --divider-border-width: 1px;
            }

            .elementor-421 .elementor-element.elementor-element-b0cf99d .elementor-divider-separator {
                width: 100px;
            }

            .elementor-421 .elementor-element.elementor-element-b0cf99d .elementor-divider {
                padding-top: 2px;
                padding-bottom: 2px;
            }

            .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                padding-bottom: calc(13px/2);
            }

            .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                margin-top: calc(13px/2);
            }

            .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                margin-right: calc(13px/2);
                margin-left: calc(13px/2);
            }

            .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-items.elementor-inline-items {
                margin-right: calc(-13px/2);
                margin-left: calc(-13px/2);
            }

            body.rtl .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                left: calc(-13px/2);
            }

            body:not(.rtl) .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                right: calc(-13px/2);
            }

            .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-icon i {
                transition: color 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-icon svg {
                transition: fill 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-a100d26 {
                --e-icon-list-icon-size: 14px;
                --icon-vertical-offset: 0px;
            }

            .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-item>a {
                font-family: var(--e-global-typography-text-font-family), Sans-serif;
                font-size: var(--e-global-typography-text-font-size);
                font-weight: var(--e-global-typography-text-font-weight);
            }

            .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-text {
                color: #FFFFFF;
                transition: color 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-item:hover .elementor-icon-list-text {
                color: var(--e-global-color-9ab75bb);
            }

            .elementor-421 .elementor-element.elementor-element-ee98fcf {
                text-align: left;
            }

            .elementor-421 .elementor-element.elementor-element-ee98fcf .elementor-heading-title {
                color: var(--e-global-color-9ab75bb);
                font-family: "Be Vietnam", Sans-serif;
                font-size: 22px;
                font-weight: 600;
            }

            .elementor-421 .elementor-element.elementor-element-ee98fcf>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-421 .elementor-element.elementor-element-42ac473 {
                --divider-border-style: solid;
                --divider-color: #FFFFFF30;
                --divider-border-width: 1px;
            }

            .elementor-421 .elementor-element.elementor-element-42ac473 .elementor-divider-separator {
                width: 100px;
            }

            .elementor-421 .elementor-element.elementor-element-42ac473 .elementor-divider {
                padding-top: 2px;
                padding-bottom: 2px;
            }

            .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                padding-bottom: calc(15px/2);
            }

            .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                margin-top: calc(15px/2);
            }

            .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                margin-right: calc(15px/2);
                margin-left: calc(15px/2);
            }

            .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-items.elementor-inline-items {
                margin-right: calc(-15px/2);
                margin-left: calc(-15px/2);
            }

            body.rtl .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                left: calc(-15px/2);
            }

            body:not(.rtl) .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                right: calc(-15px/2);
            }

            .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-icon i {
                color: var(--e-global-color-9ab75bb);
                transition: color 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-icon svg {
                fill: var(--e-global-color-9ab75bb);
                transition: fill 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-dfcf64e {
                --e-icon-list-icon-size: 14px;
                --icon-vertical-offset: 0px;
            }

            .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-icon {
                padding-right: 8px;
            }

            .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-item>a {
                font-family: var(--e-global-typography-text-font-family), Sans-serif;
                font-size: var(--e-global-typography-text-font-size);
                font-weight: var(--e-global-typography-text-font-weight);
            }

            .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-text {
                color: #FFFFFF;
                transition: color 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-a825026 {
                color: #FFFFFF;
                font-family: var(--e-global-typography-text-font-family), Sans-serif;
                font-size: var(--e-global-typography-text-font-size);
                font-weight: var(--e-global-typography-text-font-weight);
            }

            .elementor-421 .elementor-element.elementor-element-b9dc8f9 .elementor-button .elementor-align-icon-right {
                margin-left: 12px;
            }

            .elementor-421 .elementor-element.elementor-element-b9dc8f9 .elementor-button .elementor-align-icon-left {
                margin-right: 12px;
            }

            .elementor-421 .elementor-element.elementor-element-b9dc8f9 .elementor-button {
                font-family: var(--e-global-typography-612373c-font-family), Sans-serif;
                font-size: var(--e-global-typography-612373c-font-size);
                font-weight: var(--e-global-typography-612373c-font-weight);
                line-height: var(--e-global-typography-612373c-line-height);
                letter-spacing: var(--e-global-typography-612373c-letter-spacing);
                word-spacing: var(--e-global-typography-612373c-word-spacing);
                fill: #FFFFFF;
                color: #FFFFFF;
                background-color: var(--e-global-color-9ab75bb);
                border-style: solid;
                border-width: 1px 1px 1px 1px;
                border-color: #FFFFFF00;
                border-radius: 0px 0px 0px 0px;
                padding: 18px 40px 18px 40px;
            }

            .elementor-421 .elementor-element.elementor-element-b9dc8f9 .elementor-button:hover,
            .elementor-421 .elementor-element.elementor-element-b9dc8f9 .elementor-button:focus {
                color: var(--e-global-color-9ab75bb);
                background-color: #FFFFFF;
                border-color: #FFFFFF;
            }

            .elementor-421 .elementor-element.elementor-element-b9dc8f9 .elementor-button:hover svg,
            .elementor-421 .elementor-element.elementor-element-b9dc8f9 .elementor-button:focus svg {
                fill: var(--e-global-color-9ab75bb);
            }

            .elementor-421 .elementor-element.elementor-element-0899e03>.elementor-container {
                max-width: 1170px;
            }

            .elementor-421 .elementor-element.elementor-element-0899e03>.elementor-container>.elementor-column>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-421 .elementor-element.elementor-element-0899e03 {
                border-style: solid;
                border-width: 1px 0px 0px 0px;
                border-color: #FFFFFF30;
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                margin-top: 50px;
                margin-bottom: 0px;
                padding: 20px 0px 0px 0px;
            }

            .elementor-421 .elementor-element.elementor-element-0899e03>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-421 .elementor-element.elementor-element-83fa232 {
                color: #FFFFFF;
                font-family: var(--e-global-typography-accent-font-family), Sans-serif;
                font-size: var(--e-global-typography-accent-font-size);
                font-weight: var(--e-global-typography-accent-font-weight);
            }

            .elementor-421 .elementor-element.elementor-element-c16c767 {
                text-align: right;
                color: #FFFFFF;
                font-family: var(--e-global-typography-accent-font-family), Sans-serif;
                font-size: var(--e-global-typography-accent-font-size);
                font-weight: var(--e-global-typography-accent-font-weight);
            }

            @media(max-width:1024px) {
                .elementor-421 .elementor-element.elementor-element-034debd {
                    padding: 80px 10px 20px 10px;
                }

                .elementor-421 .elementor-element.elementor-element-031e7aa>.elementor-element-populated {
                    padding: 0px 10px 0px 10px;
                }

                .elementor-421 .elementor-element.elementor-element-10a92e0>.elementor-element-populated {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-421 .elementor-element.elementor-element-40a893c {
                    text-align: left;
                    font-size: var(--e-global-typography-text-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-40a893c>.elementor-widget-container {
                    margin: 0px 0px 0px 0px;
                    padding: 0% 0% 0% 0%;
                }

                .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-item>.elementor-icon-list-text,
                .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-item>a {
                    font-size: var(--e-global-typography-text-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-694759e>.elementor-element-populated {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-421 .elementor-element.elementor-element-2f3e87d .elementor-divider-separator {
                    width: 15%;
                }

                .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-item>.elementor-icon-list-text,
                .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-item>a {
                    font-size: var(--e-global-typography-text-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-7cc0382>.elementor-element-populated {
                    margin: 40px 0px 0px 0px;
                    --e-column-margin-right: 0px;
                    --e-column-margin-left: 0px;
                    padding: 0px 0px 0px 0px;
                }

                .elementor-421 .elementor-element.elementor-element-b0cf99d .elementor-divider-separator {
                    width: 15%;
                }

                .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-item>.elementor-icon-list-text,
                .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-item>a {
                    font-size: var(--e-global-typography-text-font-size);
                }

                .elementor-bc-flex-widget .elementor-421 .elementor-element.elementor-element-36a6c84.elementor-column .elementor-widget-wrap {
                    align-items: center;
                }

                .elementor-421 .elementor-element.elementor-element-36a6c84.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                    align-content: center;
                    align-items: center;
                }

                .elementor-421 .elementor-element.elementor-element-36a6c84>.elementor-element-populated {
                    padding: 40px 0px 0px 0px;
                }

                .elementor-421 .elementor-element.elementor-element-42ac473 .elementor-divider-separator {
                    width: 15%;
                }

                .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-item>.elementor-icon-list-text,
                .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-item>a {
                    font-size: var(--e-global-typography-text-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-a825026 {
                    text-align: left;
                    font-size: var(--e-global-typography-text-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-a825026>.elementor-widget-container {
                    margin: 0px 0px 0px 0px;
                    padding: 0% 0% 0% 0%;
                }

                .elementor-421 .elementor-element.elementor-element-b9dc8f9 .elementor-button {
                    font-size: var(--e-global-typography-612373c-font-size);
                    line-height: var(--e-global-typography-612373c-line-height);
                    letter-spacing: var(--e-global-typography-612373c-letter-spacing);
                    word-spacing: var(--e-global-typography-612373c-word-spacing);
                }

                .elementor-421 .elementor-element.elementor-element-0899e03 {
                    margin-top: 60px;
                    margin-bottom: 0px;
                }

                .elementor-421 .elementor-element.elementor-element-83fa232 {
                    font-size: var(--e-global-typography-accent-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-c16c767 {
                    font-size: var(--e-global-typography-accent-font-size);
                }
            }

            @media(max-width:767px) {
                .elementor-421 .elementor-element.elementor-element-034debd {
                    padding: 60px 5px 20px 5px;
                }

                .elementor-421 .elementor-element.elementor-element-125baa2 {
                    margin-top: 0px;
                    margin-bottom: 0px;
                }

                .elementor-421 .elementor-element.elementor-element-10a92e0>.elementor-element-populated {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-421 .elementor-element.elementor-element-40a893c {
                    text-align: left;
                    font-size: var(--e-global-typography-text-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-40a893c>.elementor-widget-container {
                    margin: 0px 0px 0px 0px;
                    padding: 0px 0px 0px 0px;
                }

                .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-item>.elementor-icon-list-text,
                .elementor-421 .elementor-element.elementor-element-dc23c45 .elementor-icon-list-item>a {
                    font-size: var(--e-global-typography-text-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-694759e>.elementor-element-populated {
                    margin: 20px 0px 0px 0px;
                    --e-column-margin-right: 0px;
                    --e-column-margin-left: 0px;
                    padding: 0px 0px 0px 0px;
                }

                .elementor-421 .elementor-element.elementor-element-2f3e87d .elementor-divider-separator {
                    width: 28%;
                }

                .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-item>.elementor-icon-list-text,
                .elementor-421 .elementor-element.elementor-element-440a278 .elementor-icon-list-item>a {
                    font-size: var(--e-global-typography-text-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-7cc0382>.elementor-element-populated {
                    margin: 20px 0px 0px 0px;
                    --e-column-margin-right: 0px;
                    --e-column-margin-left: 0px;
                    padding: 0px 0px 0px 0px;
                }

                .elementor-421 .elementor-element.elementor-element-b0cf99d .elementor-divider-separator {
                    width: 28%;
                }

                .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-item>.elementor-icon-list-text,
                .elementor-421 .elementor-element.elementor-element-a100d26 .elementor-icon-list-item>a {
                    font-size: var(--e-global-typography-text-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-36a6c84>.elementor-element-populated {
                    margin: 20px 0px 0px 0px;
                    --e-column-margin-right: 0px;
                    --e-column-margin-left: 0px;
                    padding: 0px 0px 0px 0px;
                }

                .elementor-421 .elementor-element.elementor-element-42ac473 .elementor-divider-separator {
                    width: 28%;
                }

                .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-item>.elementor-icon-list-text,
                .elementor-421 .elementor-element.elementor-element-dfcf64e .elementor-icon-list-item>a {
                    font-size: var(--e-global-typography-text-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-a825026 {
                    text-align: left;
                    font-size: var(--e-global-typography-text-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-a825026>.elementor-widget-container {
                    margin: 0px 0px 0px 0px;
                    padding: 0px 0px 0px 0px;
                }

                .elementor-421 .elementor-element.elementor-element-b9dc8f9 .elementor-button {
                    font-size: var(--e-global-typography-612373c-font-size);
                    line-height: var(--e-global-typography-612373c-line-height);
                    letter-spacing: var(--e-global-typography-612373c-letter-spacing);
                    word-spacing: var(--e-global-typography-612373c-word-spacing);
                    padding: 18px 32px 18px 32px;
                }

                .elementor-421 .elementor-element.elementor-element-0899e03 {
                    margin-top: 40px;
                    margin-bottom: 0px;
                }

                .elementor-421 .elementor-element.elementor-element-83fa232 {
                    text-align: center;
                    font-size: var(--e-global-typography-accent-font-size);
                }

                .elementor-421 .elementor-element.elementor-element-7e4827c>.elementor-element-populated {
                    margin: 10px 0px 0px 0px;
                    --e-column-margin-right: 0px;
                    --e-column-margin-left: 0px;
                }

                .elementor-421 .elementor-element.elementor-element-c16c767 {
                    text-align: center;
                    font-size: var(--e-global-typography-accent-font-size);
                }
            }

            @media(min-width:768px) {
                .elementor-421 .elementor-element.elementor-element-10a92e0 {
                    width: 28.482%;
                }

                .elementor-421 .elementor-element.elementor-element-694759e {
                    width: 19.554%;
                }

                .elementor-421 .elementor-element.elementor-element-7cc0382 {
                    width: 22.678%;
                }

                .elementor-421 .elementor-element.elementor-element-36a6c84 {
                    width: 29.286%;
                }
            }

            @media(max-width:1024px) and (min-width:768px) {
                .elementor-421 .elementor-element.elementor-element-10a92e0 {
                    width: 50%;
                }

                .elementor-421 .elementor-element.elementor-element-694759e {
                    width: 50%;
                }

                .elementor-421 .elementor-element.elementor-element-7cc0382 {
                    width: 50%;
                }

                .elementor-421 .elementor-element.elementor-element-36a6c84 {
                    width: 50%;
                }
            }
            </style>
            <div data-elementor-type="page" data-elementor-id="421" class="elementor elementor-421">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-034debd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="034debd" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-031e7aa"
                            data-id="031e7aa" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-125baa2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="125baa2" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-10a92e0"
                                            data-id="10a92e0" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b4b27b6 elementor-widget elementor-widget-image"
                                                    data-id="b4b27b6" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img width="3877" height="1083"
                                                            src="wp-content/uploads/sites/241/2022/03/egistic-logo.png"
                                                            class="attachment-full size-full wp-image-411" alt=""
                                                            decoding="async" loading="lazy"
                                                            srcset="https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo.png 3877w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo-300x84.png 300w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo-1024x286.png 1024w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo-768x215.png 768w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo-1536x429.png 1536w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo-2048x572.png 2048w, https://templatekit.jegtheme.com/egistic/wp-content/uploads/sites/241/2022/03/egistic-logo-800x223.png 800w"
                                                            sizes="(max-width: 3877px) 100vw, 3877px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-40a893c elementor-widget elementor-widget-text-editor"
                                                    data-id="40a893c" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do
                                                        eiusmod </div>
                                                </div>
                                                <div class="elementor-element elementor-element-dc23c45 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="dc23c45" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <i aria-hidden="true"
                                                                        class="fas fa-map-marker-alt"></i> </span>
                                                                <span class="elementor-icon-list-text">Jl. Sunset Road
                                                                    No.815, Kuta</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <i aria-hidden="true" class="fas fa-envelope"></i>
                                                                </span>
                                                                <span
                                                                    class="elementor-icon-list-text">support@domain.com</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                                                </span>
                                                                <span class="elementor-icon-list-text">(+62)81 6754
                                                                    345</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-694759e"
                                            data-id="694759e" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-ad403e3 elementor-widget elementor-widget-heading"
                                                    data-id="ad403e3" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">Quick
                                                            Links</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-2f3e87d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="2f3e87d" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <style>
                                                        /*! elementor - v3.17.0 - 08-11-2023 */
                                                        .elementor-widget-divider {
                                                            --divider-border-style: none;
                                                            --divider-border-width: 1px;
                                                            --divider-color: #0c0d0e;
                                                            --divider-icon-size: 20px;
                                                            --divider-element-spacing: 10px;
                                                            --divider-pattern-height: 24px;
                                                            --divider-pattern-size: 20px;
                                                            --divider-pattern-url: none;
                                                            --divider-pattern-repeat: repeat-x
                                                        }

                                                        .elementor-widget-divider .elementor-divider {
                                                            display: flex
                                                        }

                                                        .elementor-widget-divider .elementor-divider__text {
                                                            font-size: 15px;
                                                            line-height: 1;
                                                            max-width: 95%
                                                        }

                                                        .elementor-widget-divider .elementor-divider__element {
                                                            margin: 0 var(--divider-element-spacing);
                                                            flex-shrink: 0
                                                        }

                                                        .elementor-widget-divider .elementor-icon {
                                                            font-size: var(--divider-icon-size)
                                                        }

                                                        .elementor-widget-divider .elementor-divider-separator {
                                                            display: flex;
                                                            margin: 0;
                                                            direction: ltr
                                                        }

                                                        .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                                        .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                                            align-items: center
                                                        }

                                                        .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                                        .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                                        .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                                        .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                                            display: block;
                                                            content: "";
                                                            border-bottom: 0;
                                                            flex-grow: 1;
                                                            border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                        }

                                                        .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                            flex-grow: 0;
                                                            flex-shrink: 100
                                                        }

                                                        .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                                            content: none
                                                        }

                                                        .elementor-widget-divider--element-align-left .elementor-divider__element {
                                                            margin-left: 0
                                                        }

                                                        .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                            flex-grow: 0;
                                                            flex-shrink: 100
                                                        }

                                                        .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                                            content: none
                                                        }

                                                        .elementor-widget-divider--element-align-right .elementor-divider__element {
                                                            margin-right: 0
                                                        }

                                                        .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                                            border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                        }

                                                        .elementor-widget-divider--separator-type-pattern {
                                                            --divider-border-style: none
                                                        }

                                                        .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                                        .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                                        .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                                        .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                                            width: 100%;
                                                            min-height: var(--divider-pattern-height);
                                                            -webkit-mask-size: var(--divider-pattern-size) 100%;
                                                            mask-size: var(--divider-pattern-size) 100%;
                                                            -webkit-mask-repeat: var(--divider-pattern-repeat);
                                                            mask-repeat: var(--divider-pattern-repeat);
                                                            background-color: var(--divider-color);
                                                            -webkit-mask-image: var(--divider-pattern-url);
                                                            mask-image: var(--divider-pattern-url)
                                                        }

                                                        .elementor-widget-divider--no-spacing {
                                                            --divider-pattern-size: auto
                                                        }

                                                        .elementor-widget-divider--bg-round {
                                                            --divider-pattern-repeat: round
                                                        }

                                                        .rtl .elementor-widget-divider .elementor-divider__text {
                                                            direction: rtl
                                                        }

                                                        .e-con-inner>.elementor-widget-divider,
                                                        .e-con>.elementor-widget-divider {
                                                            width: var(--container-widget-width, 100%);
                                                            --flex-grow: var(--container-widget-flex-grow)
                                                        }
                                                        </style>
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-440a278 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="440a278" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">

                                                                    <span class="elementor-icon-list-text">About
                                                                        Us</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">

                                                                    <span
                                                                        class="elementor-icon-list-text">Services</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">

                                                                    <span
                                                                        class="elementor-icon-list-text">Careers</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">

                                                                    <span
                                                                        class="elementor-icon-list-text">Pricing</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">

                                                                    <span
                                                                        class="elementor-icon-list-text">Contact</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7cc0382"
                                            data-id="7cc0382" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-20a1403 elementor-widget elementor-widget-heading"
                                                    data-id="20a1403" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            Useful Links</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-b0cf99d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="b0cf99d" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a100d26 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="a100d26" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">

                                                                    <span class="elementor-icon-list-text">Privacy
                                                                        Policy</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">

                                                                    <span class="elementor-icon-list-text">Terms and
                                                                        Conditions</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">

                                                                    <span
                                                                        class="elementor-icon-list-text">Disclaimer</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">

                                                                    <span
                                                                        class="elementor-icon-list-text">Support</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#">

                                                                    <span class="elementor-icon-list-text">FAQ</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-36a6c84"
                                            data-id="36a6c84" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-ee98fcf elementor-widget elementor-widget-heading"
                                                    data-id="ee98fcf" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">Work
                                                            Hours</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-42ac473 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="42ac473" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-dfcf64e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="dfcf64e" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <i aria-hidden="true" class="far fa-clock"></i>
                                                                </span>
                                                                <span class="elementor-icon-list-text">9 AM - 5 PM ,
                                                                    Monday - Saturday</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a825026 elementor-widget elementor-widget-text-editor"
                                                    data-id="a825026" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Lorem ipsum dolor sit amet, consectectur adipiscing elit, sed do
                                                        eiusmod tempor </div>
                                                </div>
                                                <div class="elementor-element elementor-element-b9dc8f9 elementor-align-left elementor-mobile-align-left animated-slow elementor-invisible elementor-widget elementor-widget-button"
                                                    data-id="b9dc8f9" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                                href="#">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span
                                                                        class="elementor-button-icon elementor-align-icon-left">
                                                                        <i aria-hidden="true"
                                                                            class="fas fa-phone-alt"></i> </span>
                                                                    <span class="elementor-button-text">+71 8997
                                                                        7661</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0899e03 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="0899e03" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1b21bf5"
                                            data-id="1b21bf5" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-83fa232 elementor-widget elementor-widget-text-editor"
                                                    data-id="83fa232" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Sea Cargo Template Kit by Jegtheme </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7e4827c"
                                            data-id="7e4827c" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-c16c767 elementor-widget elementor-widget-text-editor"
                                                    data-id="c16c767" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Copyright © 2022. All rights reserved. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </footer>
    </div><!-- #page -->
    <link rel='stylesheet' id='jeg-dynamic-style-css'
        href='wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles6f3e.css?ver=1.3.0'
        media='all' />
    <link rel='stylesheet' id='elementor-post-415-css'
        href='wp-content/uploads/sites/241/elementor/css/post-41599fa.css?ver=1700565169' media='all' />
    <link rel='stylesheet' id='tiny-slider-css'
        href='wp-content/plugins/jeg-elementor-kit/assets/js/tiny-slider/tiny-sliderf342.css?ver=2.9.3' media='all' />
    <link rel='stylesheet' id='elementor-post-421-css'
        href='wp-content/uploads/sites/241/elementor/css/post-42199fa.css?ver=1700565169' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3' media='all' />
    <link rel='stylesheet' id='e-animations-css'
        href='wp-content/plugins/elementor/assets/lib/animations/animations.min8864.css?ver=3.17.3' media='all' />
    <script src="wp-content/themes/hello-elementor/assets/js/hello-frontend.min8a54.js?ver=1.0.0"
        id="hello-theme-frontend-js"></script>
    <script src="wp-content/plugins/elementor/assets/js/webpack.runtime.min8864.js?ver=3.17.3"
        id="elementor-webpack-runtime-js"></script>
    <script src="wp-content/plugins/elementor/assets/js/frontend-modules.min8864.js?ver=3.17.3"
        id="elementor-frontend-modules-js"></script>
    <script src="wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script src="wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.17.3",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "additional_custom_breakpoints": true,
            "hello-theme-header-footer": true,
            "landing-pages": true
        },
        "urls": {
            "assets": "https:\/\/templatekit.jegtheme.com\/egistic\/wp-content\/plugins\/elementor\/assets\/"
        },
        "swiperClass": "swiper-container",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description",
            "hello_header_logo_type": "title",
            "hello_header_menu_layout": "horizontal",
            "hello_footer_logo_type": "logo"
        },
        "post": {
            "id": 6,
            "title": "Egistic%20%E2%80%93%20Sea%20Freight%20%26%20Logistic%20Company%20Elementor%20Template%20Kit%20by%20Jegtheme",
            "excerpt": "",
            "featuredImage": false
        }
    };
    </script>
    <script src="wp-content/plugins/elementor/assets/js/frontend.min8864.js?ver=3.17.3" id="elementor-frontend-js">
    </script>
    <script id="elementor-frontend-js-after">
    var jkit_ajax_url = "indexe2f2.html?jkit-ajax-request=jkit_elements",
        jkit_nonce = "ef3592f8fa";
    </script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-element61da.js?ver=2.6.2"
        id="jkit-sticky-element-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/nav-menu61da.js?ver=2.6.2"
        id="jkit-element-navmenu-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/fun-fact61da.js?ver=2.6.2"
        id="jkit-element-funfact-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/client-logo61da.js?ver=2.6.2"
        id="jkit-element-clientlogo-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/tiny-slider/tiny-sliderf342.js?ver=2.9.3"
        id="tiny-slider-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/progress-bar61da.js?ver=2.6.2"
        id="jkit-element-progressbar-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/testimonials61da.js?ver=2.6.2"
        id="jkit-element-testimonials-js"></script>
    <script id="jkit-element-pagination-js-extra">
    var jkit_element_pagination_option = {
        "element_prefix": "jkit_element_ajax_"
    };
    </script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/post-pagination61da.js?ver=2.6.2"
        id="jkit-element-pagination-js"></script>
</body>

<!-- Mirrored from templatekit.jegtheme.com/egistic/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 08:53:15 GMT -->

</html>