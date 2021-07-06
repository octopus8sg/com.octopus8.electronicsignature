<?php
class CRM_electronicsignature_API3Wrappers_Attachment implements API_Wrapper {

    /**
     * Conditionally changes contact_type parameter for the API request.
     */
    public function fromApiInput($apiRequest) {
//        print_r($apiRequest);
        //HINDOL ADDED TO PUT BASE64 images
        $data = $apiRequest['params']['content'];
        if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {
            $data = substr($data, strpos($data, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif

            if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png' ])) {
                Civi::log('No Error: no pic');
                return $apiRequest;
            }
            $data = str_replace( ' ', '+', $data );
            $data = base64_decode($data);
            if ($data === false) {
                Civi::log('Error: no data');
                return $apiRequest;
            }
//            $apiRequest['params']['content'] = $data;
        }
        return $apiRequest;
    }
    public function toApiOutput($apiRequest, $result) {
        return $result;
    }
}