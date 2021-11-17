<?php

if (!function_exists('envoiMail')) {


    /**
     * Envoi Mail
     * @return	true en cas de succes false sinon
     */
    function envoiMail($from,$to, $sujet, $message, $emailcc = null) {
        try {
            log_message('debug', '[nlsc_helper][envoiMail] :' . $from . " ; " . $sujet);

            $CI = & get_instance();
            $CI->email->from($from, "[Nlsc web] Client NLSC-RH");
            $CI->email->set_mailtype("html");
            $CI->email->message("<div style='font-family: Arial;font-size:12px'>".$message."</div>");
            $CI->email->subject($sujet);
            $CI->email->to(trim($to));
            if ($emailcc != null && $emailcc != "")
                $CI->email->cc(trim($emailcc));
            if ($CI->email->send()) {
                log_message('debug', '[' . TAG_APPLI . '][nlsc_helper][envoiMail] envoi OK');
                return true;
            }else {
                log_message('error', '[' . TAG_APPLI . '][nlsc_helper][envoiMail]Erreur sur  :' . $to . " ; " . $sujet);
            }

        } catch (Exception $e) {
            log_message('error', '[' . TAG_APPLI . '][nlsc_helper][envoiMail] :' . $e->getMessage());
        }
        return false; //sinon
    }

}