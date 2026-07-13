/* Couleur d'accent du jour : choisie parmi une palette, change chaque jour.
   Chaque entrée : [primaire clair, survol clair, primaire sombre, survol sombre] */
(function () {
  var palette = [
    ["#dc143c", "#b91c3c", "#ff6b81", "#ff4d68"], /* crimson */
    ["#0f6bce", "#0b539f", "#5eb0ff", "#3d9bff"], /* bleu */
    ["#1a7f37", "#14602a", "#50fa7b", "#3dd458"], /* vert */
    ["#6d28d9", "#5b21b6", "#b794ff", "#a374ff"], /* violet */
    ["#c2410c", "#9a3412", "#ffa657", "#ff9138"], /* orange */
    ["#0f766e", "#115e59", "#2dd4bf", "#14b8a6"], /* teal */
    ["#be185d", "#9d174d", "#ff79c6", "#ff5cb8"]  /* magenta */
  ];
  var day = Math.floor(Date.now() / 864e5);
  /* hash d'entier pour éviter que chaque jour de la semaine ait toujours la même couleur */
  var n = day;
  n = (n ^ 61) ^ (n >>> 16);
  n = (n + (n << 3)) | 0;
  n = n ^ (n >>> 4);
  n = Math.imul(n, 0x27d4eb2d);
  n = (n ^ (n >>> 15)) >>> 0;
  var c = palette[n % palette.length];
  var s = document.documentElement.style;
  s.setProperty("--color-primary", c[0]);
  s.setProperty("--color-primary-hover", c[1]);
  s.setProperty("--color-primary-dark", c[2]);
  s.setProperty("--color-primary-hover-dark", c[3]);
})();
