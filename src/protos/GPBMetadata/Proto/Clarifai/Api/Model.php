<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/model.proto

namespace GPBMetadata\Proto\Clarifai\Api;

class Model
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Proto\Clarifai\Api\Common::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\Data::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\ModelVersion::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\Concept::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\Status\Status::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\Utils\Extensions::initOnce();
        \GPBMetadata\Proto\Clarifai\Utils\Pagination\Pagination::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af1120a1e70726f746f2f636c6172696661692f6170692f6d6f64656c2e" .
            "70726f746f120c636c6172696661692e6170691a1d70726f746f2f636c61" .
            "72696661692f6170692f646174612e70726f746f1a2670726f746f2f636c" .
            "6172696661692f6170692f6d6f64656c5f76657273696f6e2e70726f746f" .
            "1a2070726f746f2f636c6172696661692f6170692f636f6e636570742e70" .
            "726f746f1a2670726f746f2f636c6172696661692f6170692f7374617475" .
            "732f7374617475732e70726f746f1a2970726f746f2f636c617269666169" .
            "2f6170692f7574696c732f657874656e73696f6e732e70726f746f1a3070" .
            "726f746f2f636c6172696661692f7574696c732f706167696e6174696f6e" .
            "2f706167696e6174696f6e2e70726f746f1a1f676f6f676c652f70726f74" .
            "6f6275662f74696d657374616d702e70726f746f1a1e676f6f676c652f70" .
            "726f746f6275662f77726170706572732e70726f746f22df010a054d6f64" .
            "656c120a0a026964180120012809120c0a046e616d65180220012809122e" .
            "0a0a637265617465645f617418032001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e54696d657374616d7012140a066170705f696418042001" .
            "2809420480b51801122d0a0b6f75747075745f696e666f18052001280b32" .
            "182e636c6172696661692e6170692e4f7574707574496e666f12310a0d6d" .
            "6f64656c5f76657273696f6e18062001280b321a2e636c6172696661692e" .
            "6170692e4d6f64656c56657273696f6e12140a0c646973706c61795f6e61" .
            "6d651807200128092292010a0a4f7574707574496e666f12200a04646174" .
            "6118012001280b32122e636c6172696661692e6170692e4461746112310a" .
            "0d6f75747075745f636f6e66696718022001280b321a2e636c6172696661" .
            "692e6170692e4f7574707574436f6e666967120f0a076d65737361676518" .
            "0320012809120c0a047479706518042001280912100a08747970655f6578" .
            "741805200128092299020a0c4f7574707574436f6e66696712290a1b636f" .
            "6e63657074735f6d757475616c6c795f6578636c75736976651801200128" .
            "08420480b5180112200a12636c6f7365645f656e7669726f6e6d656e7418" .
            "0220012808420480b51801121d0a116578697374696e675f6d6f64656c5f" .
            "69641803200128094202180112100a086c616e6775616765180420012809" .
            "12180a1068797065725f706172616d657465727318052001280912140a0c" .
            "6d61785f636f6e636570747318062001280d12110a096d696e5f76616c75" .
            "65180720012802122e0a0f73656c6563745f636f6e636570747318082003" .
            "280b32152e636c6172696661692e6170692e436f6e6365707412180a1074" .
            "7261696e696e675f74696d656f757418092001280d22280a0a4d6f64656c" .
            "5175657279120c0a046e616d65180120012809120c0a0474797065180220" .
            "01280922680a0f4765744d6f64656c52657175657374122f0a0b75736572" .
            "5f6170705f696418012001280b321a2e636c6172696661692e6170692e55" .
            "736572417070494453657412100a086d6f64656c5f696418022001280912" .
            "120a0a76657273696f6e5f696418032001280922720a194765744d6f6465" .
            "6c4f7574707574496e666f52657175657374122f0a0b757365725f617070" .
            "5f696418012001280b321a2e636c6172696661692e6170692e5573657241" .
            "7070494453657412100a086d6f64656c5f696418022001280912120a0a76" .
            "657273696f6e5f696418032001280922710a114c6973744d6f64656c7352" .
            "657175657374122f0a0b757365725f6170705f696418012001280b321a2e" .
            "636c6172696661692e6170692e557365724170704944536574120c0a0470" .
            "61676518022001280d12100a087065725f7061676518032001280d120b0a" .
            "036964731804200328092291010a11506f73744d6f64656c735265717565" .
            "7374122f0a0b757365725f6170705f696418012001280b321a2e636c6172" .
            "696661692e6170692e55736572417070494453657412260a056d6f64656c" .
            "18022001280b32132e636c6172696661692e6170692e4d6f64656c420218" .
            "0112230a066d6f64656c7318032003280b32132e636c6172696661692e61" .
            "70692e4d6f64656c227a0a1250617463684d6f64656c7352657175657374" .
            "122f0a0b757365725f6170705f696418012001280b321a2e636c61726966" .
            "61692e6170692e55736572417070494453657412230a066d6f64656c7318" .
            "022003280b32132e636c6172696661692e6170692e4d6f64656c120e0a06" .
            "616374696f6e18032001280922570a1244656c6574654d6f64656c526571" .
            "75657374122f0a0b757365725f6170705f696418012001280b321a2e636c" .
            "6172696661692e6170692e55736572417070494453657412100a086d6f64" .
            "656c5f696418022001280922670a1344656c6574654d6f64656c73526571" .
            "75657374122f0a0b757365725f6170705f696418012001280b321a2e636c" .
            "6172696661692e6170692e557365724170704944536574120b0a03696473" .
            "18022003280912120a0a64656c6574655f616c6c180320012808229c010a" .
            "19506f73744d6f64656c73536561726368657352657175657374122f0a0b" .
            "757365725f6170705f696418012001280b321a2e636c6172696661692e61" .
            "70692e557365724170704944536574122d0a0b6d6f64656c5f7175657279" .
            "18022001280b32182e636c6172696661692e6170692e4d6f64656c517565" .
            "7279121f0a0a706167696e6174696f6e18032001280b320b2e506167696e" .
            "6174696f6e22660a1353696e676c654d6f64656c526573706f6e7365122b" .
            "0a0673746174757318012001280b321b2e636c6172696661692e6170692e" .
            "7374617475732e53746174757312220a056d6f64656c18022001280b3213" .
            "2e636c6172696661692e6170692e4d6f64656c226c0a124d756c74694d6f" .
            "64656c526573706f6e7365122b0a0673746174757318012001280b321b2e" .
            "636c6172696661692e6170692e7374617475732e53746174757312290a06" .
            "6d6f64656c7318022003280b32132e636c6172696661692e6170692e4d6f" .
            "64656c420480b518012296010a1953696e676c654d6f64656c5765696768" .
            "74526573706f6e7365122b0a0673746174757318012001280b321b2e636c" .
            "6172696661692e6170692e7374617475732e53746174757312220a056d6f" .
            "64656c18022001280b32132e636c6172696661692e6170692e4d6f64656c" .
            "120c0a046374363418032001280c121a0a1270726f746f5f646f776e6c6f" .
            "61645f75726c180420012809421c5a03617069a2020443414950ca020d43" .
            "6c6172696661695c47727063620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

