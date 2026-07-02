# CBSUA Journals

CBSUA Journals is the academic journal portal for the Central Bicol State University of Agriculture, built on Open Journal Systems (OJS) and presented with a research-focused layout for current issues, archives, submissions, and journal browsing.

## Current Design Overview

The live site is organized as a modern journal landing page with:

- a CBSUA Journals homepage banner and tagline
- visible journal identifiers for P-ISSN 2782-8816 and E-ISSN 2799-1733
- featured articles and a highlighted current issue section
- navigation for Current, Archives, About, and submissions
- journal listings for multidisciplinary and agriculture-related publications

## Project Purpose

This repository powers the online publication workflow for CBSUA journal content, including:

- publishing articles and issues
- managing journal submissions and editorial access
- displaying current and archived issues
- providing searchable access to published works

## Local Setup

This project is intended to run in a local web server environment such as XAMPP.

1. Place the project in your local web server directory, such as htdocs/cbsua-journal.
2. Start Apache and MySQL.
3. Open the site in your browser at http://localhost/cbsua-journal/.
4. Configure the database and OJS installation settings as needed.

## Key Project Files

- config.inc.php - main OJS configuration file
- index.php - application entry point
- templates/ - presentation and layout files for the journal site
- plugins/ - OJS plugins and extensions
- docs/ - documentation and guidance

## Notes

The site is currently configured as a CBSUA journal platform using the Open Journal Systems framework. For more detailed technical documentation, refer to the included documentation in the docs folder and the PKP resources.

## License

This project is based on Open Journal Systems and follows the applicable PKP/OJS licensing terms.
