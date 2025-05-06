Create database named `default`
```
create database default
```

Create `php_logs` table inside `default` database like below
```
CREATE TABLE php_logs (
  timestamp DateTime,
  message String,
  log String,
  container_id String,
  container_name String,
  source String
) ENGINE = MergeTree()
ORDER BY timestamp;
```