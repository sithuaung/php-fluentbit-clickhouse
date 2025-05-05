CREATE TABLE php_logs (
  timestamp DateTime,
  message String,
  log String,
  container_id String,
  container_name String,
  source String
) ENGINE = MergeTree()
ORDER BY timestamp;