#!/usr/bin/env bash

docker run -it --rm     \
 -v "$PWD":/usr/src/myapp \
 -w /usr/src/myapp \
 elixir:slim bash
