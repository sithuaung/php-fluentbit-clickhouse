function remove_timezone(tag, timestamp, record)
    local ts = record["timestamp"]
    if ts ~= nil then
        -- Remove timezone, e.g., from 2025-05-05T14:08:19+00:00 to 2025-05-05T14:08:19
        local cleaned = string.match(ts, "^(%d%d%d%d%-%d%d%-%d%dT%d%d:%d%d:%d%d)")
        record["timestamp"] = cleaned
    end
    return 1, timestamp, record
end
