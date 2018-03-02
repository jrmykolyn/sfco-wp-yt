# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]
### Added
- Add [WP User Avatar](https://en-ca.wordpress.org/plugins/wp-user-avatar/) to list of required plugins.

### Changed
- Update 'site title': wrap text in link.
- Update 'post hero': allow image height to increase at 960px and above.
- Update 'drawer nav': close if focus leaves child element; close when browser width exceeds 768px.
- Update template files: register theme text for translation.
- Update type styles: adjust proportions and spacing.
- Update 'post': display author's avatar image.
- Update plugin notice: include URL.

### Removed
- Remove use of `rem()` mixin (replace with literal values).

## [0.1.1] - 2018-02-27
### Changed
- Update `package.json`: ensure that `zip` script installs node modules; add Gulp task aliases to `scripts` field.
- Update `README.md` to include installation instructions.
- Update template files: replace ACF-enabled `dek` field with vanilla WordPress `excerpt`.

## [0.1.0] - 2018-02-26
### Added
- Add everything!
