#!/bin/bash

git-pbuilder create
git-buildpackage --git-no-pristine-tar --git-export-dir="../build"