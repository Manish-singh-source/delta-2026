<?php

/**
 * Apply the shared cPanel mailbox SMTP configuration to a PHPMailer instance.
 *
 * Define DELTACAB_SMTP_PASSWORD in the web server environment. Keeping the
 * mailbox password outside the document root prevents accidental disclosure.
 */
function configureDeltacabMailer(PHPMailer $mailer)
{
    $password = getenv('DELTACAB_SMTP_PASSWORD');

    if (!is_string($password) || trim($password) === '') {
        error_log('DELTACAB_SMTP_PASSWORD is not configured.');
        return false;
    }

    $mailer->IsSMTP();
    $mailer->Host = 'mail.deltacab.co.in';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'enquiry@deltacab.co.in';
    $mailer->Password = $password;
    $mailer->SMTPSecure = 'ssl';
    $mailer->Port = 465;
    $mailer->CharSet = 'UTF-8';
    $mailer->Timeout = 30;
    $mailer->setFrom('enquiry@deltacab.co.in', 'Delta Cab');

    return true;
}
