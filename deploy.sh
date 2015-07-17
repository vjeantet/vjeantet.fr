#!/bin/bash

echo -e "\033[0;32mDeploying updates to AppEngine...\033[0m"

# Build the project. 
hugo -t casper

# Add changes to git.
git add -A

# Commit changes.
msg="rebuilding site `date`"
if [ $# -eq 1 ]
  then msg="$1"
fi
git commit -m "$msg"

# Push source and build repos.
git push origin master
appcfg.py --oauth2 update public