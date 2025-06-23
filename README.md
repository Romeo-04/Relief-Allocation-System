# Relief-Allocation-System
# This is a requirement for Application Development

## Password Storage

User passwords are stored using PHP's `password_hash` with `PASSWORD_DEFAULT`.
The `password` column should be sized to store these hashes (e.g. a
`VARCHAR(255)` field).
