<?php
namespace classDemo;
class Task {
    public string $description;
    public bool $completed = false;

    /**
     * Task constructor.
     * @param $description
     */
    public function __construct($description)
    {
        $this->description = $description;
    }

    /**
     * @param bool $completed
     */
    public function setCompleted(bool $completed): void
    {
        $this->completed = $completed;
    }

}

$tasks = [
    new Task('Take my Bath'),
    new Task('Read my Books'),
    new Task('Write Code')
];

$tasks[0]->setCompleted(true);


require 'index.view.php';