Backup DB :

pg_dump -U bani -d perpustakaan > perpustakaan_03052024.sql
pg_dump -U bani -d perpustakaan -f perpustakaan_03052024.dump


Restore DB :

psql -d perpustakaan < perpustakaan_03052024.dump
