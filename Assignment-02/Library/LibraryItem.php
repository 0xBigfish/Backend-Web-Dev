<?php

namespace Assignment02\Library;

abstract class LibraryItem
{
    abstract public function getDetails(): array;

    abstract public function calculateLateFees(int $daysLate): float;

    public function printItemDetails(LibraryItem $libraryItem)
    {
        $details = $libraryItem->getDetails();
        foreach ($details as $entry) {
            print $entry;
        }
    }
}