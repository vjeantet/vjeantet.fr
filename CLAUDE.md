# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

Personal blog of Valère Jeantet (vjeantet.fr), built with [Hugo](https://gohugo.io/). Content is mostly in French. No build pipeline, linter, or tests - Hugo is the only tool.

## Commands

```bash
hugo server              # Local dev server with live reload (http://localhost:1313)
hugo server -D           # Include draft posts
hugo                     # Build the site into public/ (gitignored)
git submodule update --init   # Fetch the theme (required after fresh clone)
```

## Structure and architecture

- `config.toml` - site config: menus, author params, permalinks (`post = "/:slug/"`, so a post's URL comes from its `slug`/filename, not its date).
- `content/post/` - blog posts, Markdown with TOML front matter (`+++`). New posts need `title`, `date`, `draft`; `slug` is optional.
- `content/security/` - security notes organized by CISSP-style domains.
- `themes/hugo-theme-casper/` - the theme, a **git submodule** pointing to vjeantet/hugo-theme-casper. Do not edit files inside it from this repo; override templates by placing files in the top-level `layouts/` instead (Hugo's lookup order prefers project `layouts/` over the theme).
- `layouts/partials/netlify.html` - custom footer partial (wired via `params.customFooterPartial`) that loads the Netlify Identity widget and redirects logged-in users to `/admin/`.
- `static/` - files copied verbatim into the site root. `static/app.yaml` is a legacy Google App Engine config; deployment is now Netlify.
- `_prose.yml` - config for the prose.io web editor (content root, media dir).

## Notes

- The site is deployed on Netlify; there is no CI config in the repo.
- `public/` and `themes/casper/` (an old untracked theme copy) are not part of the source; ignore them.
