<?php

namespace Qutee\Persistor;

/**
 * Persistor interface
 *
 * @author anorgan
 */
interface PersistorInterface
{

    /**
     * Set options
     *
     * @param array $options
     *
     * @return PersistorInterface
     */
    public function setOptions(array $options);

    /**
     * Get options
     *
     * @return array
     */
    public function getOptions();

    /**
     * Add task to the queue
     *
     * @param \Qutee\Task $name
     *
     * @return PersistorInterface
     */
    public function addTask(\Qutee\Task $task);

    /**
     * Get next task from the queue
     *
     * @param int $priority Return only tasks with this priority
     *
     * @return \Qutee\Task|null
     */
    public function getTask($priority = null);

    /**
     * Get all tasks from the queue
     *
     * @param int $priority Return only tasks with this priority
     *
     * @return array array of tasks
     */
    public function getTasks($priority = null);

    /**
     * Marks a task as failed
     *
     * @param  array $task The task to fail
     *
     * @return void
     */
    public function failTask($task);

    /**
     * Marks a task as ready to be retried
     *
     * @param  array $task
     *
     * @return void
     */
    public function retryTask($task);

    /**
     * Clear all tasks from queue
     *
     * @return boolean
     */
    public function clear();
}