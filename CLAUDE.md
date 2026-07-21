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
- `i18n/` - UI strings (`fr.toml`, `en.toml`) consumed by project-level `layouts/` overrides. The archie theme itself hard-codes its labels in English and does not call the `i18n` function.

## Multilingual (FR + EN)

The site is bilingual via Hugo's native multilingual support, configured under `[languages]` in `config.toml`:

- **French is the default** and served at the site root (`/mon-post/`); **English is served under `/en/`** (`/en/my-post/`). `defaultContentLanguageInSubdir` is intentionally left off so existing French URLs never change.
- **Translation is by filename.** A translated post is a pair sharing the same base name: `my-post.fr.md` + `my-post.en.md`, both in `content/post/`. Hugo pairs them automatically. Files with **no** language suffix (e.g. `about.md`) are treated as French.
- Each language has its own `params` (subtitle/description/keywords) and its own `[[menu.main]]` entries in `config.toml`.
- The language switcher lives in `layouts/partials/head.html` (an override of the theme's nav partial): it links to the current page's translation via `.Translations`, falling back to the other language's home page when the page isn't translated.
- Example translated post: `content/post/l-oeil-est-un-sediment-de-la-main.{fr,en}.md`.

## Notes

- The site is deployed on Netlify; there is no CI config in the repo.
- `public/` and `themes/casper/` (an old untracked theme copy) are not part of the source; ignore them.
