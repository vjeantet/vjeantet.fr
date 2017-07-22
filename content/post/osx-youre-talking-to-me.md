+++
date = "2014-05-17T18:03:35+02:00"
draft = false
slug = "osx-youre-talking-to-me"
tags = ["tools"]
title = "OsX, you're talking to me ?"

+++
Just found a fun command on Mac Os X, named as "say".

**say** converts what you give it as input, as an audible sound.

```
$ say "hello"
```

Combine it with pipes

```
$ date | say
```
```
$ fortune | say
```


Let it notify you when a job's completed.

```
$ brew update && say 'Brew updated' &
```

**say**  can 

* save the audible to a mp3 file
* slow its speech rate
* send it to a network port
* use the voice/language you want. male/female/french/dutch...

All options are available with a ```$ man say```



### Examples : 
With a french voice
```
$ say --voice Thomas "Bonjour je m'appelle Valère"
```

To know which voices are available on your system : ```$ say --voice ?```, to install more voices, go to your system preferences.


The same, faster.
```
$ say --voice Thomas --rate=400 "Bonjour je m'appelle Valère"
```

![](/content/images/2014/May/26758.png)