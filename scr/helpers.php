<?php

if (!function_exists('sweet_alert')) {
    /**
     * @param null $title
     * @param null $message
     *
     * @return \SKAgarwal\SweetAlert\SweetAlert
     */
    function sweet_alert($title = null, $message = null)
    {
        /** @var SKAgarwal\SweetAlert\SweetAlert $sweetAlert */
        $sweetAlert = new SKAgarwal\SweetAlert\SweetAlert;
        
        if (func_num_args() == 0) {
            return $sweetAlert;
        }
        
        return $sweetAlert->info($title, $message);
    }
}
