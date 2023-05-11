# Easy Github CDN Link Generator

This project is a web-based tool that generates a CDN link for a Github file, allowing the file to be served through a global content delivery network (CDN).

## Features

- Input validation for Github file links
- Generates a CDN link for the specified Github file
- Copy CDN link to clipboard with one-click
- Responsive and mobile-friendly design
- Supports both JavaScript and CSS files

## Getting Started

To get started with this project, you can clone this repository and launch the web tool in a web server. Make sure you have PHP installed on your system.

First, clone the repository:

```
git clone https://github.com/ki-ask/github-cdn.git
```

Then, navigate to the directory and start a local web server:

```
cd github-cdn
php -S localhost:8000
```

Visit `http://localhost:8000/` in your web browser to use the tool.

## Usage

To use the generator tool, enter a link to a Github file in the input field on the home page and click the "Get CDN Link" button. The tool will validate the input to make sure it is a valid Github file link, and if it is valid, it will generate a CDN link for the file.

The generated link will be displayed on the page, and you can copy it to your clipboard by clicking the "Copy to Clipboard" button.

## Technologies Used

- HTML/CSS
- Bootstrap
- JavaScript
- jQuery
- PHP

## Contributions

Contributions to this project are welcome. If you find a bug or have a feature suggestion, please open an issue on this GitHub repository. If you'd like to contribute code, please submit a pull request.

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).