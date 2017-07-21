#!/bin/bash

cd pimf-framework/ && \
git fetch --tags && \
git checkout v1.10.1 && \
cd .. && \
git add pimf-framework/ && \
git commit -m "moved submodule to v1.10.1" && \
git push

