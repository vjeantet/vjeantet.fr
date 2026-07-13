// Load the Netlify Identity widget and redirect logged-in users to the
// admin/CMS. Wired via params.defer_custom_js in config.toml because the
// github-style theme has no custom footer hook.
(function () {
  var s = document.createElement("script");
  s.src = "https://identity.netlify.com/v1/netlify-identity-widget.js";
  s.onload = function () {
    if (window.netlifyIdentity) {
      window.netlifyIdentity.on("init", function (user) {
        if (!user) {
          window.netlifyIdentity.on("login", function () {
            document.location.href = "/admin/";
          });
        }
      });
    }
  };
  document.head.appendChild(s);
})();
