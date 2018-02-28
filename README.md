# YT

## Table of Contents
- [About](#about)
- [Installation](#installation)
	- Overview
	- Instructions
- [Post Types](#post-types)
	- Default
	- Custom
- [Templates](#templates)
	- Default
	- Custom
- [Options](#options)
	- Overview
	- List
		- Site Identity
		- Preheader
		- Footer
- [Components](#components)
	- Overview
	- List
- [Routes](#routes)
- [Dependencies](#dependencies)
	- Plugins
	- Libraries

## About
This document includes information about the `YT` WordPress theme, including: post types; templates; options; components; routes; and dependencies. For usage details, as well as technical information, consult the in-code documentation.

## Installation

### Overview
The YT theme can be installed directly from Github by following the instructions below. Please note that these instructions assume the following:
- Your local development environment includes [`npm`](https://github.com/npm/npm).
- You are comfortable working on the command line.
- You have an existing WordPress installation.

### Instructions
- Navigate to the [YT theme repository](https://github.com/jrmykolyn/sfco-wp-yt)
- Clone or download the repository.
- Navigate to the root of the repository.
- Run the `npm run zip` command.
- Log in to your existing WordPress installation and upload the compiled/zipped `YT` theme folder.

## Post Types

### Default

#### Post
Use this post type to present editorial content, including: text; images; embedded media; author information; etc.

#### Page
Use this post type to display 'informational' content which will be changed minimally (if at all) over time. Examples include: 'About Us'; 'Contact Us'; etc.

### Custom
This project does not include any custom post types.

## Templates

### Default
This project includes the following default templates:
- 'Index'
- 'Front Page'
- 'Page'
- 'Single'
- '404'

### Custom
This project does not include any custom templates.

## Options

### Overview
This section includes information about all of the project-specific options which are configurable via the WordPress dashboard.

### List

#### Site Identity
These options may be accessed via the `Appearance > Customize` menu.

##### Logo
Use this field to insert a custom/project-specific logo into the theme.

##### Hide Logo
Use this option to hide the logo asset, and display the site title instead.

#### Preheader
These options may be accessed via the `Appearance > Customize` menu.

##### Message
Use this field to insert a custom message into the 'preheader' element. If active, the preheader message will appear above the theme header.

#### Footer
These options may be accessed via the `Appearance > Customize` menu.

##### Footer Message

###### Title
Use this field to insert a custom title into the footer element.

###### Text
Use this field to insert a block of supporting text into the footer element.

##### Footer Attribution

###### Text
Use this field to insert copyright (or other legal/attribution information) into the footer element.

## Components

### Overview
This section includes a list of all the project-specific components.

### List

#### Drawer Navigation

#### Footer

#### Header

#### Navigation

#### Pagination

#### Post Preview

#### Preheader

## Routes
At the time of writing, this project does not include any custom routes. See `Settings > Permalinks` for details relating to URL patterns.

## Dependencies

### Plugins

#### Overview
This section includes a list of all WordPress plugins which the project includes/depends on.

#### List
- [Advanced Custom Fields](https://www.advancedcustomfields.com/)

### Libraries

#### Oveview
This section includes a list of all JavaScript libraries which the project includes/depends on.

#### List
- [jQuery](https://jquery.com/)
