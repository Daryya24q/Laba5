<?php


function buildTask(array $taskData): array
{
    return [
        $taskData['Category'],
        $taskData['Title'],
        $taskData['Email'],
        $taskData['Text']
    ];
}