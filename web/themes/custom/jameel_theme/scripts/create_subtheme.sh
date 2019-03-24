#!/bin/bash
# Script to quickly create sub-theme.

echo '
+------------------------------------------------------------------------+
| With this script you could quickly create jameel_theme sub-theme     |
| In order to use this:                                                  |
| - jameel_theme theme (this folder) should be in the contrib folder   |
+------------------------------------------------------------------------+
'
echo 'The machine name of your custom theme? [e.g. mycustom_jameel_theme]'
read CUSTOM_jameel_theme

echo 'Your theme name ? [e.g. My custom jameel_theme]'
read CUSTOM_jameel_theme_NAME

if [[ ! -e ../../custom ]]; then
    mkdir ../../custom
fi
cd ../../custom
cp -r ../contrib/jameel_theme $CUSTOM_jameel_theme
cd $CUSTOM_jameel_theme
for file in *jameel_theme.*; do mv $file ${file//jameel_theme/$CUSTOM_jameel_theme}; done
for file in config/*/*jameel_theme.*; do mv $file ${file//jameel_theme/$CUSTOM_jameel_theme}; done
mv {_,}$CUSTOM_jameel_theme.theme
grep -Rl jameel_theme .|xargs sed -i '' -e "s/jameel_theme/$CUSTOM_jameel_theme/"
sed -i '' -e "s/SASS Bootstrap Starter Kit Subtheme/$CUSTOM_jameel_theme_NAME/" $CUSTOM_jameel_theme.info.yml
echo "# Check the themes/custom folder for your new sub-theme."
