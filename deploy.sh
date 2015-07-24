#!/bin/bash

echo -e "\033[0;32mDeploying updates to AppEngine...\033[0m"

# Build the project. 
hugo

# Add changes to git.
git add -A

# Commit changes.
msg="rebuilding site `date`"
if [ $# -eq 1 ]
  then msg="$1"
fi
git commit -m "$msg"

# Push source 
git push origin master

# Deploy to AppEngine
appcfg.py --oauth2 update public