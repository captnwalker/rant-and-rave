# **IN PRODUCTION** - Rant and Rave

## Purpose of this App

>*Scream into the digital abyss.* **"Rant and Rave"** is an exercise in building a MVC framework from scratch posing as a Social Media platform. Similar to REACT, Angular or Laravel, this is built on a Custom MVC Framework written in PHP. This framework does include PDO to help prevent SQL injection. Please refer to the docs below on how to implement.

### Table of Contents

<!-- TOC -->

- [**IN PRODUCTION** - Rant and Rave](#in-production---rant-and-rave)
    - [Purpose of this App](#purpose-of-this-app)
        - [Table of Contents](#table-of-contents)
        - [How to Use](#how-to-use)
        - [Deployment / **TO BE DEPLOYED Before 4/10/2018**](#deployment--to-be-deployed-before-4102018)
        - [Preliminary Screenshot of this Project - *Production build / preliminary styling / not final UI/UX*](#preliminary-screenshot-of-this-project---production-build--preliminary-styling--not-final-uiux)
        - [Tech Stack](#tech-stack)
        - [MVC File Structure](#mvc-file-structure)
        - [How to Implement](#how-to-implement)
            - [License](#license)
                - [*March 2018*](#march-2018)

<!-- /TOC -->

### How to Use

As a simple social network app users create an account, log in, create a post. Owners can edit or delete their own posts. All logged in users can view (read-only) all users posts.

### Deployment / **TO BE DEPLOYED Before 4/10/2018**

Follow this link to the [Rant and Rave](https://rant-and-rave.herokuapp.com/) on the Web after 4/1/2018

### Preliminary Screenshot of this Project - *Production build / preliminary styling / not final UI/UX*

![Rant and Rave](https://raw.github.com/captnwalker/rant-and-rave/master/public/img/GIF.gif "Rant and Rave")

### Tech Stack

| Core | Styling | Database |
| ---- | ------- | ------- |
| PHP | CSS3 | MySql |
| PDO | BootStrap 4.0 |   |
| HTML5| Google Fonts |   |   |

### MVC File Structure

```
app
├── config
│   └── connection.php
│ 
├── controllers
│   │── Pages.php
│   ├── Posts.php
│   └── Users.php
│
├── models
│   └── Post.php
│   └── User.php
│ 
├── libraries
│   ├── Controller.php
│   ├── Core.php
│   └── Database.php
│ 
├── composer.json (*if dependencies are desired*)
│
├── helpers
│   ├── session_helper.php
│   └── url_helper.php
│
├── .htaccess
│
├── bootstrap.php
│
├── views
│   ├── inc
│   │   │── header.php
│   │   │── footer.php
│   │   └── navbar.php
│   │── pages
│   │   │── about.php
│   │   └── index.php
│   ├── posts
│   │   │── add.php
│   │   │── edit.php
│   │   │── index.php
│   │   └── show.php
│   └── users
│       │── login.php
│       └── register.php
│
public
├── js
│   └── main.js
├── css
│   └── styles.css
├── img
│   └── images.png
│
├── index.php
│
├── .htaccess
│
.htaccess
│
schema
   └── schema.sql

```

### How to Implement

1. Clone down this repo.
2. Create your own SQL server in phpAdmin
3. In `config/config.php` update server settings with your settings
4. In `public/.htaccess` update `SITENAME` on line 4 of `RewriteBase`
5. Build Models in the model folder according to the model example provide. (*example model not intended to be included "as is" in your project*)
6. Open your project folder in browser `localhost/_YOUR_PROJECT_FOLDER_/pages/`

---

#### License

>MIT

##### *March 2018*