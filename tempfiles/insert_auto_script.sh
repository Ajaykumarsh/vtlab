#!bin/bash

    sed -n '/.*\"radio\"*/p' $2 | cut -d ">" -f3 | cut -d "<" -f1 > temp.txt
    i=0;
    j=1;
    a=1;
    b='a';
    
    while read p;do
<<<<<<< HEAD
    echo "insert into answer_$1 values ('$3$j$b', '$p');" >> $2.sql;
=======
    echo "insert into answer_$1 values ($1$j$b', '$p');" >> $z.sql;
>>>>>>> 90769c71bdd2f1bc2040eb8c1fd8feda200e9001
    i=`expr $i + 1`;
    if [ $b == 'a' ];then b='b';
    elif [ $b == 'b' ];then b='c';
    elif [ $b == 'c' ];then b='d';
    elif [ $b == 'd' ];then b='a'; fi;
    if [ $i -eq 4 ];then i=0; j=`expr $j + 1`; echo "" >> $2.sql; fi
    done < temp.txt
<<<<<<< HEAD
    echo "  --> $2  done";
    rm temp.txt;
=======
done;
rm temp.txt
>>>>>>> 90769c71bdd2f1bc2040eb8c1fd8feda200e9001
