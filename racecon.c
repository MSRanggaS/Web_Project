#include<stdlib.h>
#include<stdio.h>
#include<unistd.h>
#include<error.h>
#include<sys/types.h>
static void charatatime(char *);
int main(void)
{
        pid_t pid;
        pid = fork();
        if((pid=fork())<0){
            printf("fork error\n");
        }
        else if(pid==0){
            charatatime("child child child child child child child child child child child child child child child child child child child child child child child child child child\n");
        }
        else{
            charatatime("parent parent parent parent parent parent parent parent parent parent parent parent parent parent parent parent parent parent parent parent parent parent\n");
        } 
        
}
static void charatatime(char *str)
{
        char *ptr;
        int c;
        setbuf(stdout,NULL);
        for(ptr=str;(c=*ptr++)!=0;)
                putc(c,stdout);
}
