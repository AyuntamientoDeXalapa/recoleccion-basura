#!/bin/bash
echo "Copy public folder to public_html/Laravel"
rsync -rv ./public/ ../../public_html/Laravel