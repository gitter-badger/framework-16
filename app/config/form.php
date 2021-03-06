<?php

return array(

    /*
    | -------------------------------------------------------------------
    | Form
    | -------------------------------------------------------------------
    | This file contains your arrays of form messages configuration. It is used by the
    | Form Class to help set form notice templates. The array keys are used to identify notices 
    | that is defined in your constants file.
    |
    */
    NOTICE_MESSAGE => '<div class="{class}">{icon}{message}</div>',
    NOTICE_ERROR   => ['class' => 'alert alert-danger', 'icon' => '<span class="glyphicon glyphicon-remove-sign"></span> '],
    NOTICE_SUCCESS => ['class' => 'alert alert-success', 'icon' => '<span class="glyphicon glyphicon-ok-sign"></span> '],
    NOTICE_WARNING => ['class' => 'alert alert-warning', 'icon' => '<span class="glyphicon glyphicon-exclamation-sign"></span> '],
    NOTICE_INFO    => ['class' => 'alert alert-info', 'icon' => '<span class="glyphicon glyphicon-info-sign"></span> '],
);

/* End of file form.php */
/* Location: .app/config/form.php */