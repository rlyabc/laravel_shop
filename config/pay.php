<?php

return [
    'alipay' => [
        'app_id'         => '2016092100563409',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxHx87yIRPW+0pMt/x74se1btwygethbe5wYPnW5d3FsVSp8hF/jKswmE31nlRn/48pBaOK+RrlJWW1BwST0eKsTeeEkKeV6yPHPZzrpByEIjo5iZQxahSXWKXEtRGHrgeYl7/4chym0p4Yd+i9VD5L4emUrwfVesGuF/BKYn99BCvVfC/+jpcp9NTtppVs7JHbohE9xQWaOfRoW0+u4saFY3hXCruvn8/gnC5ZzXs60YGWAyRPuYphVgsJRSqoULbE/CBqKvLbziEF6s0BgI9iwlFL19WQTFbuTBOQUiOk9RuMliQwC1C5QtFpzJ1xK8NZycrR547AwA25dTeYeCMQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAssI9aXpzxW3COteOJ5VPCcv5rdI8BSPR+q5hP2o6uWTGs2ZbfLAYjlz4+aRg3z5fsCMvFhoiXAGcEyEc0xbaZVbOzFcvb9hTMVHPJ1WI+pqe/maqHMRMVqZ9+zCJ3eISjJJFGhj1zHCgvtQ+06DtZKAYap6VwKoZQdSLVlEMwnqx4San9opBEr3L8V3HMyUVp3i25lV8W9UE6qMR/grJ5sQFSgjxbCN0kT3RzA/F3bQvJJhffMozu/quw5DKLLlrV7YXcjc8xUl1Wk/mw2PZnDr/Y1YFystXah5vUlmUwP22w6tH7gObxewhlVPCxmX23iIq+zQshHWIRR93mxYV4QIDAQABAoIBAEEBxEWMg3eDr8OoSgj5ElI0vGrK7orL+PuZ2MGwBwUOsffhvFl+zJ9RDjXy4kutKi0qzl/SRzaAW1rVit71C50Y0YGcHyMkXzSrVJMwVu0Tt8g6W5i0hjJov53OjASFx0sZkkmoVBLxznM3SlW5yzrxwY9cdocnFKJNAhL0zJgYXMZfWqOKePtObS1NNHpAWk/lBkT8iP5Y429tJX4vYRqV8ZCeUdfcBrrMzCMPHvOc5+iik8clcBe+Zrh9TFVvYnbZ7KaohGwv33rnOpASqhodJRSJgWPVbHzwwUZy7R0rufz0885qE5cnA7GXYA/mjIfAVV7Qqg65KLto6h4NQAECgYEA30EEYJO/GN+SkHTHu6ECEEygXa5jz+IA0dLo+S6MTFcovSbejtdeYcQlKJ5O7Be/DizBIF3Y8NINkqn6tVqXPc372pw/jn/TMNwBQHtXIcw6/7dlBxoG7P+HyKPJWif9SOqqI9LMtO82FOAukBmcBG6JOK3SIAdxiD04GI5Hl+ECgYEAzPp3v4Tad/qL6R0cxC202dl40soof4N8mFD7r1DKMVyd2Ozu9WoNeZZqudRWzPYtYD1t3nC/Jm+0hN9xW70NF/S6rvI/cXenRf/lC7WWj4YbcOD3JobYdKjlk5/bMqih0+p7Ov4IA/IKoQ+6E92aHGN+S7ZQwajWl18H+f7GPgECgYEAt94dU8j7Duo7FFwJj58YSwJA5UbWD4Tr9eNFWswaYlk6RSZ5D52SruRTUjOnfkxEXtE/MX/5RsVIxmzV/XyhqRY3gaFDuwHNlqTrJwcuCLjiMm8BdqrZ32DInNc/4s+ii+YwwBZB4BZPLTxBPQ7Kbt/2hcaqkxRuTa1VwOuVTSECgYEAxSGM0M/AG+sFa2foJnOennSb0n1BfYDC7unTY8Pa8KYV2G3lUnhwBSM3+QfRgsSu1wO9ClR8QUbk4XTS3FtwoD1o3J91jHZ6lMOJUD2PUvCyq1hv2MmOmoNkZxkyAgJTwC6d3Ro6MzEwL72kQz63292DtOTdvaHW3zUxwqfXmAECgYAiYA2wKycYSpyLGi+ocdq/VgG52aQcWkVI0uG24bUm4Yo2pCCHiG7R/j4HIsIyLfdprB7XbKM56etUKTeVMQ0X4r8LpKXyRVOZvm7jMYMFoPdVOx/+FivOKj/7fMptVw7bnBDKKWcX2Po6AVp+bBRBceHKa2RBoZaJZMElBVtrrA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];