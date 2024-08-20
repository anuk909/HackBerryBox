#!/bin/bash
# Count completed exercises from todo.txt
completed_exercises=$(grep -c "\[x\]" /home/ubuntu/todo.txt)

echo "Number of completed exercises: $completed_exercises"
