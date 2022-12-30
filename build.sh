#!/bin/sh
targetPath=./public/wp-content/themes/aaron

npx sass ./src/sass/style.scss $targetPath/style.css
cp ./src/*.* $targetPath/
cp ./src/favicons/*.* $targetPath/
cp -R ./src/images $targetPath/images
cp -R ./src/fonts $targetPath/fonts
npx esbuild ./src/js/main.js --bundle --outfile=$targetPath/main.js  --minify
