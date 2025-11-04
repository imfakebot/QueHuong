export class userService {
    constructor({ userModel }) {
        this.User = userModel;
    }

    /**
     * Tạo một người dùng mới trong cơ sở dữ liệu.
     * @param {object} userData Dữ liệu của người dùng.
     * @param {object} options Tùy chọn cho Sequelize (ví dụ: transaction).
     * @returns {Promise<User>} Đối tượng User vừa được tạo.
     */
    async createUser(userData, options = {}) {
        return this.User.create(userData, options);
    }
}