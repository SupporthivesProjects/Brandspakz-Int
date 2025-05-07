#!/bin/bash
old_value=$1
new_value=$2

# Find all files containing the old value, excluding .env
files=$(grep -rl --exclude=".env" "$old_value" .)  # '.' specifies the current directory; you can change this to the specific directory

# Loop through each file and replace the old value with the new value
for file in $files
do
    echo "replacing in $file"
    sed -i "s/$old_value/$new_value/g" "$file"
done
