<?php

class Subs extends Controller {
    public function index() {
        $ch = curl_init();
        $url = "http://host.docker.internal:8001/subscription";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);

        $xmlRequest = '<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
        <Body>
            <getAll xmlns="http://interfaces/">
                <api_key xmlns="">PHP_API_KEY</api_key>
            </getAll>
        </Body>
        </Envelope>';
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlRequest);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));

        $response = curl_exec($ch);
        if ($response === false) {
            $error = curl_error($ch);
        }
        curl_close($ch);

        // Handling errors
        if ($response === false) {
            echo "Error: " . $error;
            return;
        }

        $xmlResponse = simplexml_load_string($response);
        $result = $xmlResponse->xpath('//return');
        $resultText = "<ul>";
        foreach ($result as $subscription) {
            $creator_id = $subscription->creator_id;
            $subscriber_id = $subscription->subscriber_id;
            $status = $subscription->status;

            $resultText .= "<li>Creator ID: $creator_id, Subscriber ID: $subscriber_id, Status: $status</li>";
        }
        $resultText .= "</ul>";

        $data['resultText'] = $resultText;
        

        $this->view('Subs', $data);
    }

    public function accept() {
        $creator_id = $_POST['creator_id'];
        $subscriber_id = $_POST['subscriber_id'];
        
        $this->callSOAPAPIWithSubscription('acceptSubscription', $creator_id, $subscriber_id);
    }

    public function getAll() {
        $this->callSOAPAPIWithoutSubscription('getAll');
    }

    public function getAllSubsByIds() {
        $subscriber_id = $_POST['subscriber_id'];
        
        $this->callSOAPAPIWithSubscription('getAllSubsByIds', null, $subscriber_id);
    }

    public function reject() {
        $creator_id = $_POST['creator_id'];
        $subscriber_id = $_POST['subscriber_id'];

        $this->callSOAPAPIWithSubscription('rejectSubscription', $creator_id, $subscriber_id);
    }

    public function insert() {
        $creator_id = $_POST['creator_id'];
        $subscriber_id = $_POST['subscriber_id'];

        $this->callSOAPAPIWithSubscription('insertSubscription', $creator_id, $subscriber_id);
    }

    private function callSOAPAPIWithoutSubscription($method) {
        $ch = curl_init();
        $url = "http://host.docker.internal:8001/subscription";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
    
        $xmlRequest = '<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
            <Body>
                <' . $method . ' xmlns="http://interfaces/">
                    <api_key xmlns="">PHP_API_KEY</api_key>
                </' . $method . '>
            </Body>
        </Envelope>';
    
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlRequest);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
    
        $response = curl_exec($ch);
        if ($response === false) {
            $error = curl_error($ch);
        }
        curl_close($ch);
    
        if ($response === false) {
            echo "Error: " . $error;
            return;
        }
    
        $xmlResponse = simplexml_load_string($response);
        $result = $xmlResponse->xpath('//return');
        $resultText = "<ul>";
        foreach ($result as $subscription) {
            $creator_id = $subscription->creator_id;
            $subscriber_id = $subscription->subscriber_id;
            $status = $subscription->status;
    
            $resultText .= "<li>Creator ID: $creator_id, Subscriber ID: $subscriber_id, Status: $status</li>";
        }
        $resultText .= "</ul>";            
        $data['response'] = $resultText;
        
        $this->view('Subs', $data);
    }
    
    private function callSOAPAPIWithSubscription($method, $creator_id, $subscriber_id) {
        $ch = curl_init();
        $url = "http://host.docker.internal:8001/subscription";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
    
        $xmlRequest = '<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
            <Body>
                <' . $method . ' xmlns="http://interfaces/">
                    
                    <subscription xmlns="">
                        <api_key>PHP_API_KEY</api_key>
                        <creator_id>' . $creator_id . '</creator_id>
                        <subscriber_id>' . $subscriber_id . '</subscriber_id>
                    </subscription>
                </' . $method . '>
            </Body>
        </Envelope>';
    
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlRequest);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
    
        $response = curl_exec($ch);
        if ($response === false) {
            $error = curl_error($ch);
        }
        curl_close($ch);
    
        if ($response === false) {
            echo "Error: " . $error;
            return;
        }
    
        $xmlResponse = simplexml_load_string($response);
        $result = $xmlResponse->xpath('//return');
        $resultText = "<ul>";
        foreach ($result as $subscription) {
            $creator_id = $subscription->creator_id;
            $subscriber_id = $subscription->subscriber_id;
            $status = $subscription->status;
    
            $resultText .= "<li>Creator ID: $creator_id, Subscriber ID: $subscriber_id, Status: $status</li>";
        }
        $resultText .= "</ul>";            
        $data['response'] = $resultText;
        
        $this->view('Subs', $data);
    }
    

    
}
