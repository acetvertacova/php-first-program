# Laboratory Work №1: Installation and First PHP Program

## Installation and Project Launch Instructions
 
### Step 1: Installing PHP 

1. Download the latest version of PHP from the official website: https://www.php.net/downloads.
2. Add the PHP path to the environment variables (`Path`).
3. Verify the installation by running the following command in the terminal: `php -v`.

### Step 2: Launching the project

1. Cloning the repository:
   1.1 On GitHub, navigate to the main page of the repository.
   1.2 Above the list of files, click <> Code.

   <img scr="https://docs.github.com/assets/cb-13128/mw-1440/images/help/repository/code-button.webp">
   1.3 Copy the URL for the repository.
   1.4 Open Terminal, сhange the current working directory to the location where you want the cloned directory.
   1.5 Type `git clone`, and then paste the URL you copied earlier.
   1.6 Press Enter to create your local clone.
2. Navigating to the project folder in terminal: `cd [absolute-path-to-the-project-folder]`.
3. Starting the PHP server: `php -S localhost:8080`.
4. Opening the project in a browser: `http://localhost:8000/filename.php`.

## Lab's Description

The goal of this lab work is to install and configure the development environment for working with the PHP programming language, as well as to create the first PHP program.

## Project Documentation

This project demonstrates basic PHP functionality for outputting data using both the `echo` and `print` functions, working with variables, and displaying results using `string concatenation` as well as variable parsing with curly braces (`{}`). The project uses HTML for structuring the output and CSS for styling the page, creating a simple and visually pleasant output layout.

### Technical Details
    - **Programming Language:** PHP
    - **Operations:** String concatenation, variable usage.
    - **Output:** Functions echo and print, HTML <br> tag for line breaks.

## Usage Examples

1. Basic Output Using `echo` and `print`:

```php
<?php 
    echo "Привет, мир!";
    
    echo "Hello, World with echo!"; 
    print "Hello, World with print!"; 
```

*Expected Output:*

<img src="images/Screenshot 2025-02-14 at 21.58.19.png">

2. Working with Variables - in PHP, variables are denoted with a dollar sign `$`:

```php
<?php 
            $days = 288;
            $message = "Все возвращаются на работу!";
    ?>
```

3. Using *String Concatenation* and *Curly Braces* for Variable Output:

```php
// String Concatenation
echo "Days: " . $days . ", Message is: " . $message; 

// Curly Braces
echo "Days: {$days}, Message is: {$message}"; 
```

*Expected Output:*

<img src="images/Screenshot 2025-02-14 at 22.06.20.png">

## The Control Questions

### What are the methods for installing PHP?

1. Manual Installation from the official website.
2. Using XAMPP (a free, open-source software package that provides an easy way to install and configure a local development environment for web development).

### How to check if PHP is installed and working?

You can verify if PHP is installed and working by typing the following command in terminal: `php -v`.If PHP is installed, it will display the version of PHP installed on your system.

### What is the difference between the `echo` and `print`?

They are both used to output data to the screen. Although, the differences are:

| **Feature**                       |            `echo`              |            `print`            |
|-----------------------------------|--------------------------------|-------------------------------|
| **Return Value**                  | No return value (void)         | Returns `1`                   |
| **Number of Parameters**          | Can take multiple parameters   | Can take one parameter        |
| **Performance**                   | Faster                         | Slower due to return value    |

## Source List 

- [Cloning a repository](https://docs.github.com/en/repositories/creating-and-managing-repositories/cloning-a-repository);
- [PHP official website](https://www.php.net/downloads);
- [echo vs print](https://www.w3schools.com/php/php_echo_print.asp#:~:text=echo%20and%20print%20are%20more,print%20can%20take%20one%20argument.);
- [Markdown Guide](https://www.markdownguide.org/basic-syntax/);
























