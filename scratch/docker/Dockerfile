FROM golang:1.9-stretch

RUN echo 'debconf debconf/frontend select Noninteractive' | debconf-set-selections
RUN apt-get update && apt-get upgrade -y

#SPLIT APT PACKAGES TO MAKE USE OF CACHING
RUN apt-get install -y apt-utils sudo git tree

#SUDOERS + SSH
COPY config/sudoers /etc/sudoers

RUN useradd -ms /bin/bash audiens
RUN usermod -aG sudo audiens
RUN usermod -aG 1000 audiens
RUN echo audiens:audiens | chpasswd

USER audiens

WORKDIR /home/audiens/projects

RUN sudo chown -R audiens:audiens /home/audiens

COPY config/.bashrc /home/audiens/.bashrc

WORKDIR /home/audiens/projects/golang-workshop
VOLUME ["/home/audiens/projects"]
