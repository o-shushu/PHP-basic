###
* FROM 指定基础镜像在其基础上构建新的镜像 [可在docker hub,或命令查询：]
    若不以任何镜像作为基础：FROM scratch
    * 语法：
        * FROM <image> 使用最新版本
        * FROM <image>:<tag> 指定版本
        * FROM <image>:<digest> 指定版本
* MAINTAINER描述镜像作者及联系方式（可选）
    * MAINTAINER name<email@163.com>

* LABEL为镜像设置标签,可以配置多个LABEL（可选）
    * 语法：
        * LABEL <key>=<value>
    * 例子
        * LABEL "example.label"="Example Label"
        * LABEL label-value=LABEL
        * LABEL version="1.0.0"
        * LABEL description="使用\可以拼写多行"
* ENV设置容器的环境变量，可以设置多个
    * 语法：
        * ENV <key> <value> （一次只能设置一个）
        * ENV <key>=<value> <key>=<value> （一次能设置多个）
* RUN构建镜像时需要执行的shell命令，只用于构建镜像时
    * 语法：
        * RUN <command> （直接写shell脚本）
        * RUN ["executable","param1","param2","paramN"] （类似函数调用，第一个参数为可执行文件，后面的都是参数）
* ADD将主机中的指定文件复制到容器的目标位置
    * 语法：
        * ADD <scr>  <dest>
        * ADD ["<scr>", "<dest>"]
    * 例子：
        ADD /etc/hosts(主机文件)  /etc/hosts(容器位置)
        ADD ["/etc/hosts", "/etc/hosts"]
* WORKDIR 设置容器中的工作目录，若该目录不存在则会自己创建（操作是对容器进行）
    * WORKDIR /app (创建并进入app)
* VOLUME镜像数据卷绑定，将主机中的指定目录挂载到容器中，与宿主机共享
    * 语法：
        * VOLUME ["<dir>"]
        * VOLUME <dir>
        * VOLUME <dir> <dir>
    * 例子：
        VOLUME ["/www/head.cn"]
* EXPOSE设置容器启动后要暴露的端口(容器运行后[容器内]可能会有8080端口暴露，并没有与主机中的任意一个端口形成映射关系)
    * 语法：EXPOSE <port>/<tcp/udp>
    * 例子：
        * EXPOSE 8080
        * EXPOSE 8080/tcp
* CMD和ENTRYPOINT选用其一即可。作用是描述镜像构建完成后，启动容器时默认执行的脚本
    * CMD
        * 语法：
            * CMD ["executable","param1","param2"]
            * CMD ["param1","param2"]
            * CMD <command> <param1> <param2>
        * 例子：
            * CMD ping 127.0.0.1
            * CMD ["sh", "-c", "ping 127.0.0.1"]  //sh: 是 Shell 的可执行文件;-c表示后面跟随一个要执行的命令字符串。
    * ENTRYPOINT
        * 语法：
            * ENTRYPOINT ["executable","param1","param2"]
            * ENTRYPOINT <command> <param1> <param2>
    * CMD和ENTRYPOINT
        * 相同点：
            启动容器时默认执行的脚本；
            无论写几次都只有最后一次生效
        * 不同点：
            ENTRYPOINT不会被运行容器时指定的命令所覆盖，而CMD会被覆盖
            如：docker  run  容器名 /bin/bash ///bin/bash会覆盖CMD中命令
        * 若同时设置这两个指令，且CMD仅是选项不是参数，CMD中的内容就会作为ENTRYPOINT的参数（通常不这么做）
* ARG 在镜像中定义一个变量，当使用docker build命令构建镜像时，用--build-arg <name>=<value>来指定参数值，
    若该变量名在dockerfile中不存在就会给出警告
    * 语法：ARG <name>[=<default value>]
    * 例子：
        ARG jdk=8
* USER设置容器的用户，可以是用户名或UID。若用户设置了以daemon用户去运行，那么RUN，CMD和ENTRYPOINT都会以这个用户去运行，
    一定要先确定 容器中有这个用户，并且拥有对应的操作权限。（简言之，对继承者有影响，对自己没影响）
    * 语法：
        * USER <username>
        * USER <PID>
* ONBUILD 在构建镜像时做某操作，不过不对当前dockerfile的镜像生效，
    而是对以前Dockerfile镜像作为基础镜像的子镜像生效。
    * 语法：
        ONBUILD [INSTRUCTION]
    * 例子：
        若当前镜像为A，有如下命令
        ONBUILD RUN ls -al
        镜像B：  //构建B镜像时就会运行ONBUILD RUN ls -al
        FROM A  
* STOPSIGNAL当容器停止运行时发送停止信号通知
* HEALTHCHECK健康检查，是用来检测容器内运行的程序是否正常运行8：40，指定检查时间，若失败最多不能超过3次
    返回参数：
    0：成功
    1：健康检测失败
    2：保留值