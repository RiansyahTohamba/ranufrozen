ci-cd.md

https://medium.com/front-end-weekly/ci-cd-with-github-actions-to-deploy-on-github-pages-73e225f8f131


# Deployment pada 'Github Pages' dengan 'Github Actions' use CI/CD method
Pada 2019 November, github melahirkan fitur 'Github Actions' yang menjadikan developer dapat meng-otomasi wofklow pada Github Repositorinya.

Market is a very competitive place, your ideas may be great but without delivery early and delivering frequently, it may get difficult to keep up with the competition, let’s see how using Github actions you can easily and continuously integrate (CI) and continuously deploy (CD) your code.


CI is the software development practice of regularly integrating code changes into a shared code repository.
CD allows you to automatically deploy live, every changes that pass the CI.


There are many ways to deploy your website, we are here going to use Github pages (for deploying a JS or CRA app) because we are creating this whole Github environment where we have our code in Github repository, doing CI and CD through Github actions. Simply we are doing every thing on Github platform.
GitHub Pages is a static site hosting service that takes HTML, CSS, and JavaScript files straight from a repository on GitHub, optionally runs the files through a build process, and publishes a website.
Steps to publish on Github pages:
First you need to install gh-pages as a dev-dependency

`npm install gh-pages --save-dev`


This will create a gh-pages branch, copy over all files from the base path, commit all changes and push to the origin remote.
Add properties to package.json file, in the existing script property you need to add predeploy and deploy

## Now deploy it to Github pages
`npm run deploy`


The gh-pages branch will host your app, you can open the branch setting scroll down to GitHub Pages section you will find this:

# Setting up a Github-action CI/CD workflow
These steps will help to setup our CI/CD workflow file.
At the root of your repository, create a directory named .github/workflows to store your workflow files.
In .github/workflows, add a .yml file for your workflow. For example, .github/workflows/continuous-integration-workflow.yml .
Use the reference documentation to choose events to trigger an action, add actions and customize your workflow.
Commit your changes in the workflow file to the branch where you want your workflow to run.
Before getting started, you need to add your personal access token to the environment.
A personal access token is required to authenticate to GitHub in the following situations:
When you’re using two-factor authentication
To access protected content in an organization that uses SAML single sign-on (SSO)

name
Name is the name of the workflow. GitHub displays the names of your workflows on your repository’s actions page.
name: CI and CD
on
On key, this tells the Github action system when to build the workflow. 0n key triggers the workflow. You can provide single event, array of events, array of event types.

jobs
Each work flow consists of one or more jobs. Jobs run parallel by default. It tells workflow what job we want it to do.

Note: crazy-max/ghaction-github-pages is a custom Github action created by Crazy Max to deploy to Github pages. You can publish your own page as well.
runs-on
Each job runs in an environment specified by runs-on. Github actions can actually run on Windows, Mac, Ubuntu.
runs-on: ubuntu-latest 
Github provides a great environment to be more productive by doing all the production, integration and deployment related tasks in the same platform, thus saves a lot time.