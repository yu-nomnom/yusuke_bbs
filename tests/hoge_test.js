'use strict';
var profile = [
    {name:'yusuke',family_name:'nomura',age:26,hobby:'fishing'},
    {name:'ken',family_name:'satou',age:33,hobby:'work'},
];

var file = 'hoge_hoge.txt';
var fs = require('fs');
async function original_test(){
        var array_length = await profile.length;

        async function write_profile(){
            for (let i = 0; i < array_length; i++) {
                await console.log(profile[i].name);
                await console.log(profile[i].family_name); 
                await console.log(profile[i].age);
                await console.log(profile[i].hobby);
                console.log(i + ':書き込み終了');
            }
        }
        async function write_text(){
            for (let j = 0; j < array_length; j++) {
                var text = await JSON.stringify(profile[j]);
                //var charset = await 'UTF8';
                try {
                    fs.appendFile(file, text + '¥n');
                    console.log('write end');
                }catch(e){
                    console.log(e);
                }   
            }
        }
        
        await write_profile();
        await write_text();
}

original_test();