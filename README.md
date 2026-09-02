# DokuWiki Plugin: Code Button (Toolbar)

Inserts two toolbar buttons:

- **Code** → wraps selection with `<code>...</code>`
- **File** → wraps selection with `<file>...</file>`

## Changes in this branch (`php8-compatibility`)

- Added `plugin.info.txt` (modern DokuWiki standard, replaces `getInfo()`)
- Updated for PHP 8.x compatibility
- Removed obsolete `require_once` and old defines
- Fixed method signatures (removed reference on event parameter)
- Used short array syntax and modern coding style
- Added **two buttons**: Code + File
- Declared minimum PHP version 7.4

## Installation

Copy the `codebutton` folder into `lib/plugins/` of your DokuWiki installation.

## Compatibility

- DokuWiki: recent versions
- PHP: 7.4 – 8.x
