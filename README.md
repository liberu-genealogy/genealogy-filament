# Liberu Genealogy

![](https://img.shields.io/badge/PHP-8.3-informational?style=flat&logo=php&color=4f5b93)
![](https://img.shields.io/badge/Laravel-11-informational?style=flat&logo=laravel&color=ef3b2d)
![](https://img.shields.io/badge/JavaScript-ECMA2020-informational?style=flat&logo=JavaScript&color=F7DF1E)
![](https://img.shields.io/badge/Livewire-3.0-informational?style=flat&logo=Livewire&color=fb70a9)
![](https://img.shields.io/badge/Filament-3.2-informational?style=flat&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OCIgaGVpZ2h0PSI0OCIgeG1sbnM6dj0iaHR0cHM6Ly92ZWN0YS5pby9uYW5vIj48cGF0aCBkPSJNMCAwaDQ4djQ4SDBWMHoiIGZpbGw9IiNmNGIyNWUiLz48cGF0aCBkPSJNMjggN2wtMSA2LTMuNDM3LjgxM0wyMCAxNWwtMSAzaDZ2NWgtN2wtMyAxOEg4Yy41MTUtNS44NTMgMS40NTQtMTEuMzMgMy0xN0g4di01bDUtMSAuMjUtMy4yNUMxNCAxMSAxNCAxMSAxNS40MzggOC41NjMgMTkuNDI5IDYuMTI4IDIzLjQ0MiA2LjY4NyAyOCA3eiIgZmlsbD0iIzI4MjQxZSIvPjxwYXRoIGQ9Ik0zMCAxOGg0YzIuMjMzIDUuMzM0IDIuMjMzIDUuMzM0IDEuMTI1IDguNUwzNCAyOWMtLjE2OCAzLjIwOS0uMTY4IDMuMjA5IDAgNmwtMiAxIDEgM2gtNXYyaC0yYy44NzUtNy42MjUuODc1LTcuNjI1IDItMTFoMnYtMmgtMnYtMmwyLTF2LTQtM3oiIGZpbGw9IiMyYTIwMTIiLz48cGF0aCBkPSJNMzUuNTYzIDYuODEzQzM4IDcgMzggNyAzOSA4Yy4xODggMi40MzguMTg4IDIuNDM4IDAgNWwtMiAyYy0yLjYyNS0uMzc1LTIuNjI1LS4zNzUtNS0xLS42MjUtMi4zNzUtLjYyNS0yLjM3NS0xLTUgMi0yIDItMiA0LjU2My0yLjE4N3oiIGZpbGw9IiM0MDM5MzEiLz48cGF0aCBkPSJNMzAgMThoNGMyLjA1NSA1LjMxOSAyLjA1NSA1LjMxOSAxLjgxMyA4LjMxM0wzNSAyOGwtMyAxdi0ybC00IDF2LTJsMi0xdi00LTN6IiBmaWxsPSIjMzEyODFlIi8+PHBhdGggZD0iTTI5IDI3aDN2MmgydjJoLTJ2MmwtNC0xdi0yaDJsLTEtM3oiIGZpbGw9IiMxNTEzMTAiLz48cGF0aCBkPSJNMzAgMThoNHYzaC0ydjJsLTMgMSAxLTZ6IiBmaWxsPSIjNjA0YjMyIi8+PC9zdmc+&&color=fdae4b&link=https://filamentphp.com)

![Latest Stable Version](https://img.shields.io/github/release/liberu-genealogy/genealogy-laravel.svg) 
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/439b57ad525b4fbb8c598ab1df8598d4)](https://app.codacy.com/gh/liberu-genealogy/genealogy-laravel?utm_source=github.com&utm_medium=referral&utm_content=liberu-genealogy/genealogy-laravel&utm_campaign=Badge_Grade)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/laravel-liberu/genealogy/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/laravel-liberu/genealogy/?branch=master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/laravel-liberu/genealogy/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![StyleCI](https://github.styleci.io/repos/135390590/shield?branch=master)](https://github.styleci.io/repos/135390590)


[![CodeFactor](https://www.codefactor.io/repository/github/familytree365/genealogy/badge/master)](https://www.codefactor.io/repository/github/familytree365/genealogy/overview/master)
[![codebeat badge](https://codebeat.co/badges/911f9e33-212a-4dfa-a860-751cdbbacff7)](https://codebeat.co/projects/github-com-modulargenealogy-genealogy-master)
[![CircleCI](https://circleci.com/gh/liberu-genealogy/genealogy-laravel.svg?style=svg)](https://circleci.com/gh/liberu-genealogy/genealogy-laravel)



### Other active projects
* https://github.com/liberu-accounting/accounting-laravel
* https://github.com/liberu-automation/automation-laravel
* https://github.com/liberu-cms/cms-laravel
* https://github.com/liberu-crm/crm-laravel
* https://github.com/liberu-ecommerce/ecommerce-laravel
* https://github.com/liberu-maintenance/maintenance-laravel
* https://github.com/liberu-real-estate/real-estate-laravel

## Setup

1. Download the project files from this github repo
2. If you are on windows and you have Git Bash installed on your system you can open it in the project folder and just run the following command:

```bash
./setup.sh
```

and everything should be installed automatically if you are using Linux you just run the script as you normally run scripts in the terminal.

NOTE 1: The script will ask you if you want to have your .env be overwritten by .env.example, in case you have already an .env configuration available please answer with "n" (No).

NOTE 2: This script will run seeders, please make sure you are aware of this and don't run this script if you don't want this to happen.

### Description

Liberu Genealogy is an innovative open-source project, designed with Laravel 11, PHP 8.3, Filament 3.2, and Livewire 3 technologies, aiming to revolutionize genealogical research and family history exploration. Our initiative combines the power of the robust Laravel framework with the latest advancements in PHP 8.3, thus providing a cutting-edge platform to discover and preserve ancestral heritage.

Our project is based on a sophisticated genealogy website built on Laravel 11, providing users with a smooth and intuitive experience as they explore their family history. By leveraging Laravel's elegant syntax and comprehensive range of tools, we have developed a comprehensive application that allows users to easily create, manage, and explore their family trees.

Furthermore, our project, being open source, fosters collaboration and innovation within the genealogy community. Developers can leverage the technologies used to enhance the functionalities of Liberu Genealogy, propose improvements, and tailor the platform to their specific needs. We actively encourage a vibrant community of developers who utilize our open-source code to develop complementary tools and applications, thus creating an environment conducive to continuous improvement and expansion.

Establishing your own family tree has never been easier. Our platform offers two convenient options to get started. You can import data in various standard formats or manually enter the information yourself.

In order to ensure seamless integration with existing databases and records of family trees, we provide robust API support. Our API facilitates effortless import and export of Gedcom data and DNA matching results. Additionally, we are constantly innovating and will soon introduce Smart Matching, enabling easy connection with resources on other servers, thus expanding your research possibilities.

The security and confidentiality of your data are our top priorities. Your information is securely stored on our server and will never be shared without your explicit authorization. We understand the sensitivity of personal data, and we are committed to protecting your privacy.

On our platform you will find user-friendly data tables that provide comprehensive support for CRUD operations. This allows you to easily manage your family tree information. Whether you need to create, read, update or delete data entries, our intuitive interface ensures a seamless experience.

Customization is crucial, and our forms are designed to be easily editable to meet your specific needs. Customize your family tree to reflect the unique nuances and details of your lineage. Our flexible forms allow you to capture the rich history and connections that make your family history truly special.

To get started, install the application available at https://github.com/liberu-genealogy/genealogy-laravel.

Download it and explore its user-friendly interface, unleashing the power to easily create and discover your family's legacy.

Download our software today and embark on an enriching journey of tracing your roots and discovering the stories that connect generations.

## Contributors

<a href="https://github.com/liberu-genealogy/genealogy-laravel/graphs/contributors">
  <img src="https://opencollective.com/genealogy/contributors.svg?width=890&button=false" />
</a>
