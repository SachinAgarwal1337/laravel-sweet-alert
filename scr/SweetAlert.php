<?php

namespace SKAgarwal\SweetAlert;

/**
 * Class SweetAlert
 *
 * This class will Flash the Message for SweetAlert package.
 *
 * For reference on SweetAlert: http://t4t5.github.io/sweetalert/
 *
 * @author Sachin Agarwal <sachinkumaragarwal05@gmail.com>
 * @package App\Http\Flash
 */
class SweetAlert
{
    /**
     * Create a SweetAlert Flash Message
     *
     * @param $title
     * @param $message
     * @param string $type
     * @param string $key
     *
     * @return mixed
     */
    protected function create($title, $message, $type = '', $key = 'sweetalert')
    {
        return session()->flash($key, [
            'title'   => $title,
            'message' => $message,
            'type'    => $type,
        ]);
    }
    
    /**
     * Create a default Flash Message.
     *
     * @param $title
     * @param $message
     *
     * @return mixed
     */
    public function primary($title, $message)
    {
        return $this->create($title, $message);
    }
    
    /**
     * Info Type Flash Message.
     *
     * @param $title
     * @param $message
     *
     * @return mixed
     */
    public function info($title, $message)
    {
        return $this->create($title, $message, 'info');
    }
    
    /**
     * Question type Flash Message.
     *
     * @param $title
     * @param $message
     *
     * @return mixed
     */
    public function question($title, $message)
    {
        return $this->create($title, $message, 'question');
    }
    
    /**
     * Success Type Flash Message.
     *
     * @param $title
     * @param $message
     *
     * @return mixed
     */
    public function success($title, $message)
    {
        return $this->create($title, $message, 'success');
    }
    
    /**
     * Error Type Flash Message.
     *
     * @param $title
     * @param $message
     *
     * @return mixed
     */
    public function error($title, $message)
    {
        return $this->create($title, $message, 'error');
    }
    
    /**
     *
     * Warning Type Flash Message.
     *
     * @param $title
     * @param $message
     *
     * @return mixed
     */
    public function warning($title, $message)
    {
        return $this->create($title, $message, 'warning');
    }
    
    /**
     *
     * OverLay Type Flash Message.
     *
     * @param $title
     * @param $message
     * @param string $type
     *
     * @return mixed
     */
    public function overlay($title, $message, $type = 'success')
    {
        return $this->create($title, $message, $type, 'sweetalert_overlay');
    }
}
