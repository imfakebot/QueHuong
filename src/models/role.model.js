const Role = {
    id: {
        type: DataTypes.UUID,
        primary: true,
    },
    name: {
        type: DataTypes.STRING,
        allowNull: false,
        unique: true
    }
}

Role.belongstoMany(Account, {
    through: AccountRole,
    foreignKey: 'roleId',
    as: 'accounts'
});

export default Role;