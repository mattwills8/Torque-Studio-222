# Torque Child Theme Boilerplate

## GET STARTED

1.  Copy entire torque-child-theme directory into themes.

    - Include package.json, webpack.config.js, and other config files
    - Exclude node_modules if for some reason it exists

2.  Find and replace the following in the entire directory: **Note:** do not use numbers or special characters

    1.  Studio 222 (eg 905 Fulton)
    2.  studio-222-child (eg 905-fulton-child) **Note:** best practise is to include -child at the end
    3.  S222 (eg Fulton)
    4.  https://github.com/mattwills8/Torque-Studio-222 (eg https://github.com/vallgroup/Torque-Theme)
    5.  Studio 222 (eg Fulton)

3.  Rename directory: torque-child-theme => studio-222-child

4.  Rename all files in this directory: {torque-child_theme}-etc-class.php => {studio-222-child}-etc-class.php

5.  Add 'studio-222-child' to cli/lib/workspaces.sh

6.  Open new terminal, and in **project** root, run:

    ```sh
    $ yarn
    ```

    to install/link dependencies.

7.  In **project** root, run:

    ```sh
    $ yarn start studio-222-child
    ```

    to compile files to wp-content and start webpack
