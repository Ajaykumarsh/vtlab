#!bin/bash
for z in $(ls *php);do
    sed -n '/.*radio*/p' $z | cut -d ">" -f3 | cut -d "<" -f1 > temp.txt
    i=0;
    j=1;
    a=1;
    b='a';
    echo "  --> $z  done";
    while read p;do
    echo "insert into answer_$1 values ($1$j$b', '$p');" >> $z.sql;
    i=`expr $i + 1`;
    if [ $b == 'a' ];then b='b';
    elif [ $b == 'b' ];then b='c';
    elif [ $b == 'c' ];then b='d';
    elif [ $b == 'd' ];then b='a'; fi;
    if [ $i -eq 4 ];then i=0; j=`expr $j + 1`; echo "" >> $z.sql; fi
    done < temp.txt
done;
rm temp.txt