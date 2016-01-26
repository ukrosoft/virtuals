<?php
/**
 * Template Name: Payment Template
 *
 * Displays the Team Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */
?>

<?php get_header(); ?>

<?php do_action('himalayas_before_body_content');

$himalayas_layout = himalayas_layout_class(); ?>

    <div id="content" class="site-content">
        <main id="main" class="clearfix <?php echo $himalayas_layout; ?>">
            <div class="tg-container">

                <?php
                $amount = $_POST['amount']; // E.g. "250" for 2.50 EUR!
                $currency = 'EUR'; // ISO 4217
                $description = $_SERVER["HTTP_REFERER"];
                $privateApiKey = get_option('paymill_secret_key');

                if (isset($_POST['paymillToken'])) {
                    $token = $_POST['paymillToken'];

                    $client = request(
                        'clients/',
                        array(),
                        $privateApiKey
                    );

                    $payment = request(
                        'payments/',
                        array(
                            'token' => $token,
                            'client' => $client['id']
                        ),
                        $privateApiKey
                    );

                    $transaction = request(
                        'transactions/',
                        array(
                            'amount' => $amount,
                            'currency' => $currency,
                            'client' => $client['id'],
                            'payment' => $payment['id'],
                            'description' => $description
                        ),
                        $privateApiKey
                    );

                    $isStatusClosed = isset($transaction['status']) && $transaction['status'] == 'closed';

                    $isResponseCodeSuccess = isset($transaction['response_code']) && $transaction['response_code'] == 20000;

                    if ($isStatusClosed && $isResponseCodeSuccess) {
                        echo '<strong>Transaction successful!</strong>';
                    } else {
                        echo '<strong>Transaction not successful!</strong> <br />';


                    echo "<pre>";
                    var_dump($transaction);
                    echo "</pre>";
                    }
                }
                ?>


            </div>
        </main>
    </div>

<?php do_action('himalayas_after_body_content'); ?>

<?php get_footer(); ?>